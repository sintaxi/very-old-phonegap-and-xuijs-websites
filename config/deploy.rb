# PhoneGap
# set :application, "phonegap"
# set :deploy_to, "/var/www/phonegap.com"
# set :tmp, "#{application}_update"
# set :app_root, "/"
# set :user, "root"
# set :use_sudo, true
# role :web, "phonegap.com"

# XUI
set :application, "xui"
set :deploy_to, "/home/.capriciously/silentrob/xuijs.com"
set :tmp, "#{application}_update"
set :app_root, "/"
set :user, "silentrob"
set :use_sudo, false
role :web, "xuijs.com"

namespace :xui do
  task :deploy do
    # Copy
    system("cp -r #{application} #{tmp}")
    
    # Config
    File.open("#{tmp}/config/settings.php", "w") { |file| file.puts "<?php $APP_ROOT = \"#{app_root}\"; ?>" }
    
    # Tar
    system("tar -C #{tmp} -czf #{tmp}.tar.gz . && rm -r #{tmp}")
    
    # Upload
    put(File.read("#{tmp}.tar.gz"), "#{tmp}.tar.gz")
    
    # Untar
    run "tar -xzf #{tmp}.tar.gz -C #{deploy_to}"
    
    # Cleanup
    system("rm -rf #{tmp}.tar.gz")
  end
end
