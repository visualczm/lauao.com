<a href='http://www.manks.top/yii2_rbac_rule.html'>出处</a>

在我们之前yii2搭建后台以及rbac详细教程中，不知道你曾经疑惑过没有一个问题，rule表是做什么的，为什么在整个过程中我们都没有涉及到这张表？

相信我不说，部分人也都会去尝试，或百度或google,到头来也会竹篮打水，这部分讲解的内容少之又少啊！

对于一般的权限系统而言，我们之前做的rbac一般情况下是足够的，即使没有rule,相信你也能实现我们用rule实现的功能。

我们就以官网的例子给出一个具体的操作教程，看看这个神秘的rule到底是做什么的！

看需求：

我们有管理员和普通用户，对于文章系统而言，我们允许管理员对文章的任何操作，但是只允许普通用户创建文章和修改自己创建的文章，注意哦，是允许其修改自己创建的文章，不是不允许修改文章，也不是修改所有的文章！

看yii2 rbac rule怎么去实现，重点是教大家怎么去使用这个rule,也解开众多人心中的节！

在我们添加rule之前，需要先实现 yii\rbac\Rule类的execute方法。

<?php
namespace backend\components;


use Yii;
use yii\rbac\Rule;


class ArticleRule extends Rule
{
    public $name = 'article';
    public function execute($user, $item, $params)
    {
        // 这里先设置为false,逻辑上后面再完善
        return false;
    }
}
接着，我们才可以去后台rule列表（/admin/rule/index）添加rule。具体添加方式可参考下方截图

6164e2bdce-yii2rbacrule1.png

注意，上面这一步很多人会死在类名的添加上，记得加上我们ArticleRule文件所在的命名空间！

我们看第三步，该步骤也是很容易出错的地方！该篇教程请注意集中精力，前方高能！

我们访问权限列表（/admin/permission/index）新增权限，该权限只针对文章的修改，随后我们将其分配给用户所属角色

需要注意了，此处严重警告，这里新增加的权限所控制的路由也就是文章的更新操作（/article/update）分配给当前用户仅且一次，重复分配当前操作给所属角色或用户，可能造成rule失效，失效原因则是覆盖！

此刻再次刷新文章的更新页面（/article/update/1），很显然直接给我们了403 forbidden没权限访问的提示，也就是我们刚刚添加的rule生效了！如果此刻没生效，请检查上面所说的两个注意点！

然后我们实现ArticleRule::execute方法内业务逻辑，可参考如下：

class ArticleRule extends Rule
{
    public $name = 'article';


    /**
     * @param string|integer $user 当前登录用户的uid
     * @param Item $item 所属规则rule，也就是我们后面要进行的新增规则
     * @param array $params 当前请求携带的参数. 
     * @return true或false.true用户可访问 false用户不可访问
     */
    public function execute($user, $item, $params)
    {
        $id = isset($params['id']) ? $params['id'] : null;
        if (!$id) {
            return false;
        }

        $model = Article::findOne($id);
        if (!$model) {
            return false;
        }

        $username = Yii::$app->user->identity->username;
        $role = Yii::$app->user->identity->role;
        if ($role == User::ROLE_ADMIN || $username == $model->operate) {
            return true;
        }
        return false;
    }
}
最后就是验证了，到底我们所实现的rule认证起作用了没呢？

测试步骤如下可做参考：

当前用户创建一篇文章，记得记录当前文章的创建者，其角色是管理员，我们默认User::ROLE_ADMIN
创建一个普通用户，且也创建一篇文章，同时也需要记录当前文章的创建者
分别用管理员帐号和普通用户登录系统修改这两篇文章，结论自然是满足我们一开始所提的需求，管理员两篇文章均可修改，普通用户只能修改自己的文章