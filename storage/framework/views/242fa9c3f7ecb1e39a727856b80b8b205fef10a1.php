<?php $__env->startSection('template_title'); ?>
    Complete the Wizard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <i class="fa fa-magic fa-fw" aria-hidden="true"></i>
    Complete the Wizard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <div class="tabs tabs-full">

        <input id="tab1" type="radio" name="tabs" class="tab-input" checked />
        <label for="tab1" class="tab-label">
            <i class="fa fa-cog fa-2x fa-fw" aria-hidden="true"></i>
            <br />
            Settings
        </label>

        <input id="tab2" type="radio" name="tabs" class="tab-input" />
        <label for="tab2" class="tab-label">
            <i class="fa fa-database fa-2x fa-fw" aria-hidden="true"></i>
            <br />
          Database
        </label>

        <input id="tab3" type="radio" name="tabs" class="tab-input" />
        <label for="tab3" class="tab-label">
            <i class="fa fa-cogs fa-2x fa-fw" aria-hidden="true"></i>
            <br />
            Application
        </label>

        <input id="tab4" type="radio" name="tabs" class="tab-input" />
        <label for="tab4" class="tab-label">
            <i class="fa fa-cogs fa-2x fa-fw" aria-hidden="true"></i>
            <br />
            Admin Settings
        </label>

        <form method="post" action="<?php echo e(route('LaravelInstaller::environmentSaveWizard')); ?>" class="tabs-wrap">
            <div class="tab" id="tab1content">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="app_version" value="4.0.5">

                <div class="form-group <?php echo e($errors->has('app_version') ? ' has-error ' : ''); ?>">
                    <label for="app_version">
                        App Version
                    </label>
                    <input type="text" name="app_version" id="app_version" value="4.0.5" placeholder="App Version" disabled/>
                    <?php if($errors->has('app_version')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('app_version')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('app_name') ? ' has-error ' : ''); ?>">
                    <label for="app_name">
                        App Name
                    </label>
                    <input type="text" name="app_name" id="app_name" value="<?php echo e(old('app_name')); ?>" placeholder="App Name" />
                    <?php if($errors->has('app_name')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('app_name')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('environment') ? ' has-error ' : ''); ?>">
                    <label for="environment">
                        Choose Development Mod
                    </label>
                    <select name="environment" id="environment" onchange='checkEnvironment(this.value);'>
                        <option value="local" selected>local</option>
                        <option value="production">Production</option>
                    </select>
                    <div id="environment_text_input" style="display: none;">
                        <input type="text" name="environment_custom" id="environment_custom" placeholder="App Debug"/>
                    </div>
                    <?php if($errors->has('app_name')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('app_name')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('app_debug') ? ' has-error ' : ''); ?>">
                    <label for="app_debug">
                      App Debug
                    </label>
                    <label for="app_debug_true">
                        <input type="radio" name="app_debug" id="app_debug_true" value=true checked />
                        True
                    </label>
                    <label for="app_debug_false">
                        <input type="radio" name="app_debug" id="app_debug_false" value=false />
                        False
                    </label>
                    <?php if($errors->has('app_debug')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('app_debug')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('app_log_level') ? ' has-error ' : ''); ?>">
                    <label for="app_log_level">
                      Log Type
                    </label>
                    <select name="app_log_level" id="app_log_level">
                        <option value="debug" selected>Debug</option>
                        <option value="info">Info</option>
                        <option value="notice">Notice</option>
                        <option value="warning">Warning</option>
                        <option value="error">Error</option>
                        <option value="critical">Critical</option>
                        <option value="alert">Alert</option>
                        <option value="emergency">Emergency</option>
                    </select>
                    <?php if($errors->has('app_log_level')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('app_log_level')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('app_url') ? ' has-error ' : ''); ?>">
                    <label for="app_url">
                      APP_URL
                    </label>
                    <input type="url" name="app_url" id="app_url" value="<?php echo e(old('app_url')); ?>" placeholder="APP_URL" />
                    <?php if($errors->has('app_url')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('app_url')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="buttons">
                    <button class="button" onclick="showDatabaseSettings();return false">
                      Databse
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="tab" id="tab2content">

                <div class="form-group <?php echo e($errors->has('database_connection') ? ' has-error ' : ''); ?>">
                    <label for="database_connection">
                      DataBase Connection Type
                    </label>
                    <select name="database_connection" id="database_connection">
                        <option value="mysql" selected>Mysql</option>
                        <!-- <option value="sqlite">Sqlite</option>
                        <option value="pgsql">Pgsql</option>
                        <option value="sqlsrv">sqlsrv</option> -->
                    </select>
                    <?php if($errors->has('database_connection')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('database_connection')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('database_hostname') ? ' has-error ' : ''); ?>">
                    <label for="database_hostname">
                        HostName
                    </label>
                    <input type="text" name="database_hostname" id="database_hostname" value="127.0.0.1" placeholder="HostName" />
                    <?php if($errors->has('database_hostname')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('database_hostname')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('database_port') ? ' has-error ' : ''); ?>">
                    <label for="database_port">
                        DataBase port
                    </label>
                    <input type="number" name="database_port" id="database_port" value="3306" placeholder="DataBase Port" />
                    <?php if($errors->has('database_port')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('database_port')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('database_name') ? ' has-error ' : ''); ?>">
                    <label for="database_name">
                        Database Name
                    </label>
                    <input type="text" name="database_name" id="database_name" value="<?php echo e(old('database_name')); ?>" placeholder="Database Name" />
                    <?php if($errors->has('database_name')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('database_name')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <!-- <div class="form-group <?php echo e($errors->has('table_prefix') ? ' has-error ' : ''); ?>">
                    <label for="table_prefix">
                        Table Prefix
                    </label>
                    <input type="text" name="table_prefix" id="table_prefix" value="<?php echo e(old('table_prefix')); ?>" placeholder="Table Prefix" />
                    <?php if($errors->has('table_prefix')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('table_prefix')); ?>

                        </span>
                    <?php endif; ?>
                </div> -->
                <input type="hidden" class="hidden" name="table_prefix" id="table_prefix" value="" placeholder="Table Prefix" />

                <div class="form-group <?php echo e($errors->has('database_username') ? ' has-error ' : ''); ?>">
                    <label for="database_username">
                        User Name
                    </label>
                    <input type="text" name="database_username" id="database_username" value="<?php echo e(old('database_username')); ?>" placeholder="User Name" />
                    <?php if($errors->has('database_username')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('database_username')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('database_password') ? ' has-error ' : ''); ?>">
                    <label for="database_password">
                        Database Password
                    </label>
                    <input type="password" name="database_password" id="database_password" value="<?php echo e(old('database_password')); ?>" placeholder="Database Passwords" />
                    <?php if($errors->has('database_password')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('database_password')); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <div class="buttons">
                    <button class="button" onclick="showApplicationSettings();return false">
                        Application
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <input  type="hidden" name="redis_hostname" id="redis_hostname" value="127.0.0.1" placeholder="Redis Host" />
            <input  type="hidden" name="redis_password" id="redis_password" value="null" placeholder="Redis Password" />
            <input  type="hidden" name="redis_port" id="redis_port" value="6379" placeholder="Redis Port" />
            <input type="hidden" name="redis_hostname" id="redis_hostname" value="127.0.0.1" placeholder="Redis Host" />
            <input type="hidden" name="redis_password" id="redis_password" value="null" placeholder="Redis Password" />
            <input type="hidden" name="redis_port" id="redis_port" value="6379" placeholder="Redis Port" />
            <input type="hidden" name="pusher_app_id" id="pusher_app_id" value="" placeholder="Broadcast Driver" />
            <input type="hidden" name="pusher_app_key" id="pusher_app_key" value="" placeholder="Pusher App Key" />
            <input type="hidden" name="pusher_app_secret" id="pusher_app_secret" value="" placeholder="Pusher App Secret" />
            <input type="hidden" name="broadcast_driver" id="broadcast_driver" value="log" placeholder="Broadcast Driver" />
            <input type="hidden" name="cache_driver" id="cache_driver" value="file" placeholder="Cache Driver" />
            <input type="hidden" name="session_driver" id="session_driver" value="file" placeholder="Cache Driver" />
            <input type="hidden" name="queue_driver" id="queue_driver" value="sync" placeholder="Queue Driver" />

            <div class="tab" id="tab3content">
                <!-- <div class="block">
                    <input type="radio" name="appSettingsTabs" id="appSettingsTab1" value="null" checked />
                    <label for="appSettingsTab1">
                        <span>
                            Broadcasting, Caching, Session, &amp; Queue
                        </span>
                    </label>

                </div> -->
                <!-- <div class="block">
                    <input type="radio" name="appSettingsTabs" id="appSettingsTab2" value="null"/>
                    <label for="appSettingsTab2">
                        <span>
                            Redis Driver
                        </span>
                    </label>
                    <div class="info">
                        <div class="form-group <?php echo e($errors->has('redis_hostname') ? ' has-error ' : ''); ?>">
                            <label for="redis_hostname">
                                Redis Host
                                <sup>
                                    <a href="https://laravel.com/docs/5.4/redis" target="_blank" title="More Info">
                                        <i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>
                                        <span class="sr-only">More Info</span>
                                    </a>
                                </sup>
                            </label>
                            <input type="text" name="redis_hostname" id="redis_hostname" value="127.0.0.1" placeholder="Redis Host" />
                            <?php if($errors->has('redis_hostname')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('redis_hostname')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('redis_password') ? ' has-error ' : ''); ?>">
                            <label for="redis_password">Redis Password</label>
                            <input type="password" name="redis_password" id="redis_password" value="null" placeholder="Redis Password" />
                            <?php if($errors->has('redis_password')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('redis_password')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('redis_port') ? ' has-error ' : ''); ?>">
                            <label for="redis_port">Redis Port</label>
                            <input type="number" name="redis_port" id="redis_port" value="6379" placeholder="Redis Port" />
                            <?php if($errors->has('redis_port')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('redis_port')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> -->
                <div class="block">
                    <input type="radio" name="appSettingsTabs" id="appSettingsTab3" value="null"/>
                    <label for="appSettingsTab3">
                        <span>
                            Mail
                        </span>
                    </label>
                    <div class="info">
                        <div class="form-group <?php echo e($errors->has('mail_driver') ? ' has-error ' : ''); ?>">
                            <label for="mail_driver">
                                Mail Driver
                                <sup>
                                    <a href="https://laravel.com/docs/5.4/mail" target="_blank" title="More Info">
                                        <i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>
                                        <span class="sr-only">More Info</span>
                                    </a>
                                </sup>
                            </label>
                            <input type="text" name="mail_driver" id="mail_driver" value="smtp" placeholder="Mail Driver" />
                            <?php if($errors->has('mail_driver')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('mail_driver')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('mail_host') ? ' has-error ' : ''); ?>">
                            <label for="mail_host">Mail Host</label>
                            <input type="text" name="mail_host" id="mail_host" value="smtp.mailtrap.io" placeholder="Mail Host" />
                            <?php if($errors->has('mail_host')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('mail_host')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('mail_port') ? ' has-error ' : ''); ?>">
                            <label for="mail_port">Mail Port</label>
                            <input type="number" name="mail_port" id="mail_port" value="2525" placeholder="Mail Port" />
                            <?php if($errors->has('mail_port')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('mail_port')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('mail_username') ? ' has-error ' : ''); ?>">
                            <label for="mail_username">Mail Username</label>
                            <input type="text" name="mail_username" id="mail_username" value="null" placeholder="Mail Username" />
                            <?php if($errors->has('mail_username')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('mail_username')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('mail_password') ? ' has-error ' : ''); ?>">
                            <label for="mail_password">Mail Password</label>
                            <input type="text" name="mail_password" id="mail_password" value="null" placeholder="Mail Password" />
                            <?php if($errors->has('mail_password')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('mail_password')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('mail_encryption') ? ' has-error ' : ''); ?>">
                            <label for="mail_encryption">Mail Encryption</label>
                            <input type="text" name="mail_encryption" id="mail_encryption" value="null" placeholder="Mail Encryption" />
                            <?php if($errors->has('mail_encryption')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('mail_encryption')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="block margin-bottom-2">
                    <input type="radio" name="appSettingsTabs" id="appSettingsTab4" value="null"/>
                    <label for="appSettingsTab4">
                        <span>
                            Pusher
                        </span>
                    </label>
                    <div class="info">
                        <div class="form-group <?php echo e($errors->has('pusher_app_id') ? ' has-error ' : ''); ?>">
                            <label for="pusher_app_id">
                                Pusher App Id
                                <sup>
                                    <a href="https://pusher.com/docs/server_api_guide" target="_blank" title="More Info">
                                        <i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>
                                        <span class="sr-only">More Info</span>
                                    </a>
                                </sup>
                            </label>
                            <input type="text" name="pusher_app_id" id="pusher_app_id" value="" placeholder="Broadcast Driver" />
                            <?php if($errors->has('pusher_app_id')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('pusher_app_id')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('pusher_app_key') ? ' has-error ' : ''); ?>">
                            <label for="pusher_app_key">Pusher App Key</label>
                            <input type="text" name="pusher_app_key" id="pusher_app_key" value="" placeholder="Pusher App Key" />
                            <?php if($errors->has('pusher_app_key')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('pusher_app_key')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('pusher_app_secret') ? ' has-error ' : ''); ?>">
                            <label for="pusher_app_secret">Pusher App Key</label>
                            <input type="password" name="pusher_app_secret" id="pusher_app_secret" value="" placeholder="Pusher App Secret" />
                            <?php if($errors->has('pusher_app_secret')): ?>
                                <span class="error-block">
                                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?php echo e($errors->first('pusher_app_secret')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> -->
                <div class="buttons">
                    <button class="button" onclick="showAdminSettings();return false">
                        Admin Settings
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>

            </div>
            <div class="tab" id="tab4content">
                <div class="form-group <?php echo e($errors->has('purchase_code') ? ' has-error ' : ''); ?>">
                    <label for="purchase_code">
                      Purchase Code
                    </label>
                    <input type="text" required name="purchase_code" id="purchase_code" value="<?php echo e(old('purchase_code')); ?>" placeholder="Purchase Code" />
                    <?php if($errors->has('purchase_code')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('purchase_code')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('user_name') ? ' has-error ' : ''); ?>">
                    <label for="user_name">
                        User Name
                    </label>
                    <input type="text" name="user_name" id="user_name" value="<?php echo e(old('user_name')); ?>" placeholder="User Name" />
                    <?php if($errors->has('user_name')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('user_name')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('first_name') ? ' has-error ' : ''); ?>">
                    <label for="first_name">
                        First Name
                    </label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="First Name" />
                    <?php if($errors->has('first_name')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('first_name')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('last_name') ? ' has-error ' : ''); ?>">
                    <label for="last_name">
                        Last Name
                    </label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Last Name" />
                    <?php if($errors->has('last_name')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('last_name')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('email') ? ' has-error ' : ''); ?>">
                    <label for="email">
                        Email
                    </label>
                    <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Email" />
                    <?php if($errors->has('email')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('email')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('password') ? ' has-error ' : ''); ?>">
                    <label for="password">
                        Password
                    </label>
                    <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" placeholder="Password" />
                    <?php if($errors->has('password')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('password')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->has('password_confirm') ? ' has-error ' : ''); ?>">
                    <label for="password_confirm">
                        Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirm" value="<?php echo e(old('password_confirmation')); ?>" placeholder="Confirm Password" />
                    <?php if($errors->has('password_confirm')): ?>
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            <?php echo e($errors->first('password_confirm')); ?>

                        </span>
                    <?php endif; ?>
                </div>
                <div class="buttons">
                    <button class="button" type="submit">
                        Install
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>

            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        function checkEnvironment(val) {
            var element=document.getElementById('environment_text_input');
            if(val=='other') {
                element.style.display='block';
            } else {
                element.style.display='none';
            }
        }
        function showDatabaseSettings() {
            document.getElementById('tab2').checked = true;
        }
        function showApplicationSettings() {
            document.getElementById('tab3').checked = true;
        }
        function showAdminSettings() {
            document.getElementById('tab4').checked = true;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vendor.installer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qhmarket/public_html/resources/views/vendor/installer/environment-wizard.blade.php ENDPATH**/ ?>