cd P:\ProgmatechPhpProject
git.exe checkout dev
git init
git remote add origin https://github.com/behruz-code/ProgmatechPhpProject.git
git.exe add .
git.exe commit -am "Son deyisiklik"
git.exe push origin
git pull --rebase origin master
git push origin master
pause