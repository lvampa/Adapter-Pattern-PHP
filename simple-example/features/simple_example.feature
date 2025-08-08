Feature: 
   A library reader can read a book
   An audiobook listener can listen to an audiobook
   A library reader can listen to an audiobook

   Scenario:
      Given a library reader
      When they loan out a book
      Then they can read the book

    Scenario:
      Given an audiobook listener
      When they loan an audiobook
      Then they can listen to the book

    Scenario:
      Given a library reader
      When they loan an audiobook
      Then they can listen to the book
