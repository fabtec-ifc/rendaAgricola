@echo off
copy .env.example .env
php artisan sail:install
setlocal
set "current_dir=%cd%"
set "wsl_dir=%current_dir:C:=/mnt/c%"
set "wsl_dir=%wsl_dir:\=/%"
echo Windows directory: %current_dir%"
echo WSL directory: %wsl_dir%"
wsl -e bash -c "cd '%wsl_dir%' 2>/dev/null; echo 'WSL current directory: $(pwd)'; ./setup.sh; exec bash"
pause
