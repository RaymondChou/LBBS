<?php echo View::make('partials.header', get_defined_vars())->render()?>

<div class="container">
    <div class="offset1">
        <h1>注册</h1>
        <?php echo Form::open('user/home/register', 'POST',array('class'=>'form-horizontal'));?>
        <?php echo Form::token()?>
        <div class="control-group">
            <label class="control-label" for="username">用户名</label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="username" name="username" value="<?php echo Input::old('username')?>">
                <span class="help-block">最长16个字符</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">密码</label>
            <div class="controls">
                <input type="password" class="input-xlarge" id="password" name="password">
                <span class="help-block">6-16个字符,英文或数字</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password_confirmation">确认密码</label>
            <div class="controls">
                <input type="password" class="input-xlarge" id="password_confirmation" name="password_confirmation">
                <span class="help-block">6-16个字符,英文或数字</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="fullname">姓名</label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="fullname" name="fullname" value="<?php echo Input::old('fullname')?>">
                <span class="help-block">2-16个字符</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="email" class="input-xlarge" id="email" name="email" value="<?php echo Input::old('email')?>">
            </div>
        </div>


        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                </label>
                <button type="submit" class="btn btn-success">注册</button>
            </div>
        </div>
        <input type="hidden" name="url" value="<?php echo Input::get('url')?>">
        <?php echo Form::close()?>
    </div>
</div> <!-- /container -->

<?php echo View::make('partials.footer', get_defined_vars())->render()?>