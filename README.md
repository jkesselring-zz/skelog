skelog
======
Skelog is a skeleton logging tool written in PHP.

Skelog uses a companion class of class.Lorem.php to generate lorem flavored text and to create realistic file names. 

Logging: 
Args: ($type, $title, $message, $filename = "", $lineNum = -1, $format ="")

To log include "class.Log.php". Create a new instance of Logger. Set the log type when you instantiate, ex(Error, Warning, etc).

If you wish to set an author call the author method(more of a property) as $logger->("AuthorName");

To create a log file you must include a type, title, and message. 

I envisioned the type to be the type of message you wish to log. ex("Database")

The title is the title of the message being logged. ex("Database Unavailable").

Finally the message is the message being logged. ex("Cannot connect to DB Server: myDBServer at port 9001.").

Optional:
Filename, while I recommend logging the filename I do not do so automatically. Nor do I require it to be entered. My reasoning is that the logger is not useful strictly as an error logger. You can log a variety of messages with it - you may not need to know the file for some of these purposes.

Line Number, for much the same reason as Filename I do not require one to be used. Even if there is a filename, there are reasons and errors to not create a 
If there is an author set the message will be logged to that author.

Format, currently this is not used fully. When XML and JSON feed generation functionality is added to this class you will pass in either xml, json, or an empty string. If you pass in nothing or leave the parameter out all together the standard .log file will be generated. Otherwise the specified format will be used.

Planned Features:
As stated above, I plan to add XML and JSON file creation (the methods are already in existence but throw exceptions).

Log Structure: 
The path is created(or followed) when running the log. The path looks as such: "logs\YYYY\Month\DD" ex (logs\2013\April\11). Within the day's file, the name of the day is displayed (it's an empty file) to make looking back at the information somewhat easier. With this method the messages of each day are organized independently of one another.

Example Log(s):

Filler text is pulled from class.Lorem.php which is included here.

((( [20:25:43]| Type->(Been), Title->(Masu masu) Message->(The a channel and a they're way), In File->(route.html) , On line->(55), By->(JKesselring) )))

((( [20:25:43]| Type->(Now grunt sheepshead deep), Title->(Ribs nunc chuck spookfish out) Message->(Sweet know justo influence sailbearer later), In File->(contact.rss) , On line->(28), By->(JKesselring) )))

((( [20:25:43]| Type->(Broadly and), Title->(Beef adipiscing sustainable amet bears) Message->(Uglification pie the lorem the mistake the), In File->(login.yaws) , On line->(118), By->(JKesselring) )))

((( [20:25:43]| Type->(Of), Title->(Diy aliquet) Message->(Bill also really with mock trumpetfish they proident), In File->(home.less) , On line->(37), By->(JKesselring) )))

((( [20:25:43]| Type->(The church-key loin loin), Title->(Chuck ethical quis tootsie tetra) Message->(Public swag chocolate nec high), In File->(contact.less) , On line->(202), By->(JKesselring) )))

((( [20:25:43]| Type->(Alice), Title->(Spare viverra church-key ribs loin) Message->(Jack tetra drumstick sit the liquorice bears all make it), In File->(index.less) , On line->(172), By->(JKesselring) )))


