<!DOCTYPE html>
<html>
    <head>
        <?php echo Asset::container('bootstrapper')->styles();?>
        <?php echo Asset::container('bootstrapper')->scripts();?>
    </head>

    <body>
        <div class="container">

            <h1>登录</h1>
            <?php echo Form::open('login', 'POST',array('class'=>'form-inline'));?>
            <?php echo Form::token()?>
            <div class="control-group">
                <label class="control-label" for="username">用户名</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" id="username" name="username" placeholder="Enter Your Username...">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">密码</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" id="password" name="password" placeholder="Enter Your Password...">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="登录" />
            <?php echo Form::close()?>
        </div> <!-- /container -->
    </body>
</html>