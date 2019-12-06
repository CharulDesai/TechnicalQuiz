-----------------------------------------------------------------------------
1. The Note 
-----------------------------------------------------------------------------
You need to create a note for someone using only letters cut out from a 
magazine article.

You are given:
- a string that represents the text of a magazine article
- a string that represents the message you need to write

Write a function that will return true if it is possible to construct a 
given message from the article text.

Note: messages use English uppercase and lowercase letters only.
There will be no numbers or punctuation.

Sample Usage:
> // the following would return true since "a dance" can be constructed from the letters in "have a nice day"
> canCreateNote("Have a nice day", "a dance")     // true
> // the following would return false since the letter "d" only appears once in the source message
> canCreateNote("Have a nice day", "dicey advice") // false


-----------------------------------------------------------------------------
2. Priority Queue Data Structure 
-----------------------------------------------------------------------------
Implement a Priority Queue in PHP.  A Priority Queue extends the Queue
abstract data type by returning entries with the highest priority first.  
   
It should contain the following methods:

	enqueue(string value, int priority) : void
		Places an item into the priority queue with the specified 
		priority

	dequeue() : string
		Returns the next item in the queue with the highest priority,
		if two or more items contain the same priority, the items 
		should be returned in FIFO order

	isEmpty() : bool
		Returns true if the queue is empty
 
Sample Usage:

> queue = new PriorityQueue();
> queue.enqueue("a", 1)
> queue.enqueue("b", 1)
> queue.enqueue("c", 10)
> queue.enqueue("d", 3)

> print queue.dequeue() // "c"
> print queue.dequeue() // "d"
> print queue.dequeue() // "a"
> print queue.dequeue() // "b"


-----------------------------------------------------------------------------
3. The Launch 
-----------------------------------------------------------------------------
Your company's game just went live on the app-store and your marketting 
department is going into overdrive. You intelligently made the choice to 
record analytics, but unfortunately you just logged the data to a CSV file.

Our marketting team is paying American (US) and German (DE) Twitch streamers 
for every user they send us that reaches LEVEL 5.  

After a week the game isn't earning a profit (that advertising budget is 
high).  Its also  possible that there is a flaw in the game that we haven't 
yet discovered.

You need to figure out what's going on by writing code to answer the 
following questions:

1) What percentage of users are completing LEVEL 5?
2) What's the average revenue per user, split by country?
3) Of the users that completed LEVEL 5, what event was the most likely to 
   cause them to not return?
	
The csv file:
https://technical-test.s3.amazonaws.com/analytics.csv

user_id  - the id of the user in question
country  - the country the user is in
time     - what time the event was created
event_id - the id of the event	eg.  LEVEL_{n}_START,  LEVEL_{n}_COMPLETE,  PURCHASE_BOOSER
amount   - amount of real money the user spent for PURCHASE events


-----------------------------------------------------------------------------
4. SQL Database
-----------------------------------------------------------------------------
Zoro has an online store where he sells CDs, t-shirts and other merchandise 
for his band. Zoro has the legal obligation of keeping track of each of his 
customers and all of their transactions with his business for auditing 
purposes. He has decided to store this information in a MySQL  relational 
database. 

Each customer has a name and email address. Users sign up using their email 
address so no two customers can have the same email address. Zoro's site 
isn't that popular here, but it's super popular in Japan and he has 
customers from all over the world.

Each customer may have multiple transactions which we  need to 
store. Each transaction has the date and time it occurred, some brief text 
describing the transaction, and the debit or credit dollar amount. (a credit 
could occur if there happened to be a refund or if the customer received a 
credit as a result of a non financial action). 

(1) Design a relational database schema that could be used to store this data. 
Please justify your design choices. Please provide your answer in CREATE 
TABLE format, or something reasonably close. Again, doesn't need to actually 
compile, we are more interested in your ideas and reasoning than your syntax.

(2) When we delete a customer we also want to delete all of their 
transactions. This needs to be treated a single operation. What methodology 
would you employ to accomplish this?

-----------------------------------------------------------------------------
5. JavaScript Table Population
-----------------------------------------------------------------------------
Requirements:
- Using JavaScript, read data from a JSON file on an external server
- Use the JSON data to populate the table body in the HTML document
- Make sure the table is sorted by Date of Birth.

Documents:
	External Data File: (your program should download this)
	-----> https://s3.amazonaws.com/technical-test/scientists.txt 
		
	HTML:
	<html>
		<head>
			<title>Scientists!</title>
		</head>
		<body>
			<table id="data">
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Date of Birth</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<script>/* your script goes here */</script>
		</body>
	</html>


-----------------------------------------------------------------------------
[BONUS] Rook vs Queen (Do this last)
-----------------------------------------------------------------------------
Welcome to Rook vs Queen! 

Before you lies a chessboard whose dimensions are N by N where N > 1. 
Randomly distributed on this chessboard are one rook, one queen, and any 
number of pawns. Each turn, the player must move the rook with the goal of 
capturing the queen. Rooks can move any number of cells horizontally or 
vertically at a time but capturing a pawn is forbidden - you must move around the 
pawns. Every board configuration guarantees there is a valid path between 
the rook and queen. The pawns and single Queen do not move between turns.

Given the starting position of the rook, the position of the queen, and the 
positions of the pawns, determine the smallest amount of moves required in 
order to capture the queen.

For example, the following is one possible board layout where R represents 
the starting position of the rook, * represents the position of a pawn, and 
Q represents the position of the queen:

- 0 1 2 3
A R *  
B   *  
C     
D   * Q

In this case, the shortest amount of moves required in order to capture the 
queen would be 3: A0 to C0, C0 to C2, and C2 to D2.
                
