@REM -*- coding: utf-8; mode: bat -*-
@echo off

echo.
echo ########
echo Warning: This procedure will copy files from standalone/ to joomla_module/ and wordpress_plugin/. All local modifications will be lost.
echo ########
echo.

pause

SET command=robocopy /NP /NFL /NJH /NJS

echo Make joomla module...
%command% %~d0%~p0standalone\prspy %~d0%~p0joomla_module serverdata.php
%command% /S /E %~d0%~p0standalone\prspy %~d0%~p0joomla_module\mod_prspy\library /XF serverdata.php
echo Finished
echo.
echo Make wordpress plugin...
%command% /S /E %~d0%~p0standalone\prspy %~d0%~p0wordpress_plugin\prspy-widget
echo Finished

pause
