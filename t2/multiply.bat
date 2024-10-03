@echo off
set /p num1="Enter the first number: "
set /p num2="Enter the second number: "
set /a result=num1*num2
echo The result is: %result%

rem Save the result to a file
echo %result% > result.txt
echo Result saved to result.txt
pause