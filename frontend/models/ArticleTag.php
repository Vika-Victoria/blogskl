<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_tag".
 *
 * @property int $id
 * @property int $article_id
 * @property int $tag_id
 */
class ArticleTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id'], 'required'],
            [['article_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'tag_id' => 'Tag ID',
        ];
    }

    public function getIdArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }

    public function getIdTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }
}
