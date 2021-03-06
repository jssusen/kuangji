<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"G:\phpstudy\WWW\newInfo\public/../application/admin\view\member\member\create.html";i:1595820941;s:66:"G:\phpstudy\WWW\newInfo\application\admin\view\layout\default.html";i:1588765311;s:63:"G:\phpstudy\WWW\newInfo\application\admin\view\common\meta.html";i:1588765311;s:65:"G:\phpstudy\WWW\newInfo\application\admin\view\common\script.html";i:1588765311;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/newinfo/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/newinfo/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/newinfo/public/assets/js/html5shiv.js"></script>
  <script src="/newinfo/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="create-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group" style="display: none">
        <label class="control-label col-xs-12 col-sm-2">id</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-id" class="form-control" readonly name="row[id]" type="text" value="<?php echo htmlentities($row['id']); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">用户名</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-user_name" class="form-control" readonly name="row[user_name]" type="text" value="<?php echo htmlentities($row['user_name']); ?>">
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Realname'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-realname" class="form-control" readonly name="row[realname]" type="text" value="<?php echo htmlentities($row['realname']); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Mobile'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-mobile" class="form-control" readonly name="row[mobile]" type="text" value="<?php echo htmlentities($row['mobile']); ?>">
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">出场金额</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-money"   data-rule="required"  class="form-control"  name="row[money]" type="number" value="" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">出场数量</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-num"   data-rule="required" class="form-control"  name="row[num]" type="number" value="" >
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">出场产品</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-dog"
                   data-rule="required"
                   data-source="dog/dog/index"
                   class="form-control selectpage"
                   name="row[dog_id]"
                   type="text"
                   data-field="title"
                   value="">
        </div>
    </div>






    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed "><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/newinfo/public/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/newinfo/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>