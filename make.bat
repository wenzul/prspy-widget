@REM -*- coding: utf-8; mode: bat -*-
@echo off

echo.
echo ########
echo Warning: This procedure will copy files from standalone/ to joomla_module/ and wordpress_plugin/. All local modifications will be lost.
echo ########
echo.

pause

echo "Make joomla module..."
copy %~d0%~p0standalone\prspy\serverdata.php %~d0%~p0joomla_module
xcopy /S /E /I %~d0%~p0standalone\prspy\* %~d0%~p0joomla_module\mod_prspy\library\
del %~d0%~p0joomla_module\mod_prspy\library\serverdata.php
echo "Finished"
echo.
echo "Make wordpress plugin..."
xcopy /S /E /I %~d0%~p0standalone\prspy\* %~d0%~p0wordpress_plugin\prspy-widget\
echo "Finished"

pause
