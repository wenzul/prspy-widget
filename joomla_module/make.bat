@REM -*- coding: utf-8; mode: bat -*-
@echo off

echo.
echo ########
echo Warning: This procedure will copy files from standalone/ to joomla_module/. All local modifications will me lost.
echo ########
echo.

pause

copy %~d0%~p0..\standalone\prspy\serverdata.php %~d0%~p0
xcopy /S /E /I %~d0%~p0..\standalone\prspy\* %~d0%~p0mod_prspy\library\
del %~d0%~p0mod_prspy\library\serverdata.php

pause
