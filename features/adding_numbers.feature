Feature: Adding numbers
  In order to add two numbers
  As a user
  I want to be able to use Calculator functionality

  Scenario:
    Given I am on homepage
    When I fill in "Number 1" with "2"
    And I fill in "Number 2" with "3"
    And I press "Calculate"
    Then I should see "Answer is: 5"

  @javascript
  Scenario:
    Given I am on homepage
    And print last response
    When I fill in "Number 1" with "2"
    And I fill in "Number 2" with "3"
    And I press "Calculate"
    And I wait for the answer
    Then I should see "Answer is: 5"
