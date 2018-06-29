<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $title
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])
            ->viaTable('article_tag', ['tag_id' => 'id']);
    }

    public static function getAll ()
    {
       return Tag::find()->all();
    }

    public static function getTitleTags($id)
    {
        return Tag::findOne($id);
    }

    public function getArticleTags()
    {
        return $this->hasMany(ArticleTag::className(), ['tag_id' => 'id']);
    }

    public static function getArticlesByTag($id)
    {
        return  Tag::findOne($id)->getArticleTags()->with('idTag')->with('idArticle')->all();
    }

    public static function getAllArticle($id)
    {
        $query = Article::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 6]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['articles'] = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }
}
