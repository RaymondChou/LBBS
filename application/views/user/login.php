<?php echo View::make('partials.header', get_defined_vars())->render()?>

<div class="container">
    <div class="offset1">
            <h1>登录</h1>
            <?php echo Form::open('login', 'POST',array('class'=>'form-horizontal'));?>
            <?php echo Form::token()?>
            <div class="control-group">
                <label class="control-label" for="username">用户名</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" id="username" name="username" value="<?php echo Input::old('username')?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">密码</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" id="password" name="password">
                </div>
            </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                </label>
                <button type="submit" class="btn btn-primary">登陆</button>
            </div>
        </div>
        <input type="hidden" name="url" value="<?php echo Input::get('url')?>">
            <?php echo Form::close()?>
        </div> <!-- /container -->
    </div>

<?php echo View::make('partials.footer', get_defined_vars())->render()?>