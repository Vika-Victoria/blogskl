<?php
namespace frontend\controllers;

use frontend\models\CommentForm;
use frontend\models\ContactForm;
use Yii;
use app\models\Article;
use app\models\Category;
use app\models\Tag;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'inner';

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
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

        $article->viewedCount();

        $comments = $article->getArticleComments();
        $commentForm = new CommentForm();


        return $this->render('single', [
            'article' => $article,
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
            'tagTitle' => $tagTitle,
            'comments' => $comments,
            'commentForm' => $commentForm,

        ]);
    }

    public function actionComment($id)
    {
        $model = new CommentForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', 'Your comment will be added soon!');
                return $this->redirect(['site/single','id'=>$id]);
            }
        }
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
        $tagArt = Tag::getArticlesByTag($id);
        $queryTag = Tag::getTitleTags($id);
        $data = Tag::getAllArticle($id);
        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();

        return $this->render('tag', [
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
            'articles' => $data['articles'],
            'pagination' => $data['pagination'],
            'queryTag' => $queryTag,
            'tagArt' => $tagArt,
        ]);
    }

    public function actionContact()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->sendEmail(Yii::$app->params['adminEmail']))
            {
                Yii::$app->session->setFlash('success1', 'Thank you for contacting us. We will respond to you as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            $popular = Article::getPopular();
            $recent = Article::getResent();
            $categories = Category::getAll();
            $tags = Tag::getAll();

            return $this->render('contact', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories,
                'tags' => $tags,
                'model' => $model,
            ]);
        }
    }

    public function actionSearch($q)
    {
        $q = trim(Yii::$app->request->get('q'));
        $data = Article::getSearchArticle($q);

        $popular = Article::getPopular();
        $recent = Article::getResent();
        $categories = Category::getAll();
        $tags = Tag::getAll();

        return $this->render('search', [
            'articles' => $data['articles'],
            'pagination' => $data['pagination'],
            'popular' => $popular,
            'recent' => $recent,
            'categories' => $categories,
            'tags' => $tags,
            'q' => $q
        ]);
    }
}
