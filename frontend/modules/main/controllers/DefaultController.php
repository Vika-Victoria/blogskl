<?php

namespace app\modules\main\controllers;

use app\models\Article;
use app\models\ArticleTag;
use app\models\Category;
use app\models\Tag;
use yii\data\Pagination;
use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    public $layout = 'inner';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'bootstrap';

        $data = Article::getAll();
        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();

        return $this->render('index', [
            'articles' => $data['articles'],
            'pagination' => $data['pagination'],
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function actionSingle($id)
    {
        $article = Article::findOne($id);
        $tagTitle = Article::getTagsTitle($id);
        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();

        return $this->render('single', [
            'article' => $article,
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
            'tagTitle' => $tagTitle,
        ]);
    }

    public function actionAbout()
    {

        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();

        return $this->render('about', [
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function actionCategory($id)
    {

       $data = Category::getArticlesByCategory($id);

       $categoryTitle = Category::getTitle($id);

        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();

        return $this->render('category', [
            'articles' => $data['articles'],
            'pagination' => $data['pagination'],
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
            'categoryTitle' => $categoryTitle,
        ]);
    }

    public function actionTag($id)
    {
        $tagOne = Article::getTagsTitle($id);
        var_dump($tagOne);die;
        $query = Article::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 6]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();


        return $this->render('tag', [
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
            'articles' => $articles,
            'pagination' => $pagination,
            'tagOne' => $tagOne,
        ]);
    }

    public function actionContact()
    {
        return $this->render('contact');
    }
}
