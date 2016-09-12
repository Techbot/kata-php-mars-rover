Feature: Kata Deck of Cards
  in order to move the rover
  As a player
  The job is to move to  a set of co-ordinates

  Rules:

  You are given the initial starting point (x,y) of a rover and the direction (N,S,E,W) it is facing.
  The rover receives a character array of commands.
  Implement commands that move the rover forward/backward (f,b).
  Implement commands that turn the rover left/right (l,r).
  Implement wrapping from one edge of the grid to another. (planets are spheres after all)
  Implement obstacle detection before each move to a new square. If a given sequence of commands encounters an obstacle, the rover moves up to the last possible point and reports the obstacle.



  Scenario:  I move the rover
    Given Rover
    And  a starting point
    When I compare an input array of instructions
    Then I should move the rover

