# Project 3
+ By: Jennifer Wu Rice
+ URL: <http://e2p3.jrice.me>

## Graduate requirement
*x one of the following:*
+ [X] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application


## Outside resource
Rock, paper, scissors images from unsplash.com

## Codeception testing output
Tests.Acceptance Tests (3) -------------------------------------------------------------------------------------
P3Cest: Play game
Signature: Tests\Acceptance\P3Cest:playGame
Test: tests/Acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=rock-radio]","0"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 PASSED 

P3Cest: Shows history
Signature: Tests\Acceptance\P3Cest:showsHistory
Test: tests/Acceptance/P3Cest.php:showsHistory
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,34
 I grab text from "[test=round-link]"
 I click "2023-12-15 16:14:36"
 I see "2023-12-15 16:14:36"
 PASSED 

P3Cest: Validate form
Signature: Tests\Acceptance\P3Cest:validateForm
Test: tests/Acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=validation-output]"
 PASSED 

----------------------------------------------------------------------------------------------------------------
Time: 00:00.229, Memory: 12.00 MB

OK (3 tests, 5 assertions)