@echo off
title Updating Post Files via Github Repository Wiki
echo "Updating files..."
echo "Warning: This will clear all existing posts. Press any key to continue..."
start "" "%PROGRAMFILES%\Git\bin\sh.exe" -c "rm -rf _posts && mkdir _posts && cd _posts && git clone https://github.com/danthemanzx/crawl-custom-survival.wiki.git . && exit; bash"
move /Y _posts\Home.md pages\Home.md
move /Y _posts\_Sidebar.md _layouts\_Sidebar.md
echo "Done!"
exit