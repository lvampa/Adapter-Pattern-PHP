Feature:
   A library patron can read a book
   A library patron can listen to an audio book

   Scenario:
      Given a library patron and a book
      When they read the book
      Then the book is marked as read

  Scenario:
      Given a library patron and an audio book
      When they listen to an audio book
      Then the audio book is marked as listened to
