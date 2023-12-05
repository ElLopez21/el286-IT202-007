<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Erik Lopez (el286)</td></tr>
<tr><td> <em>Generated: </em> 12/4/2023 10:57:17 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/hw-html5-canvas-game/grade/el286" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I modified Collect the Squares.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://el286-prod-7114b762171a.herokuapp.com/M6/html5.html">https://el286-prod-7114b762171a.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/36">https://github.com/ElLopez21/el286-IT202-007/pull/36</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>My first change is basically increasing the movement speed as it gets the<br>targeted square.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T03.50.11image.png.webp?alt=media&token=a6c181bb-d5e0-414c-ad58-a58ba8c3ab7e"/></td></tr>
<tr><td> <em>Caption:</em> <p>here it took like a second to go from the starting point to<br>the end of the canvas. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T03.51.24image.png.webp?alt=media&token=d89a50fd-b0b5-4c05-8853-06fb4fd3d7ba"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here I had to get enough points in order to move quick and<br>at the 15 sec, I was still able to move towards the left<br>end of the canvas in still that 15 sec. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T02.56.22image.png.webp?alt=media&token=5dcb59ce-2745-4015-a8e8-d3f78bc6371f"/></td></tr>
<tr><td> <em>Caption:</em> <p> I added a var moveSpeed = 30  and added the logic<br>speed = Math.min(5 + score/5, moveSpeed); inside the moveTarget() function. So basically, I&#39;m<br>setting the speed to be a certain value in which every 5 points<br>the player gets, it&#39;ll be increased by a unit. I added 5 in<br>which it&#39;ll be like that starting speed of the game. This is all<br>in the Math.min method which gets the smallest number and makes sure it<br>doesn&#39;t exceed the moveSpeed which is 30. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T02.56.57image.png.webp?alt=media&token=5868a414-ddb1-4980-aee0-434c772c409b"/></td></tr>
<tr><td> <em>Caption:</em> <p> I added a var moveSpeed = 30  and added the logic<br>speed = Math.min(5 + score/5, moveSpeed); inside the moveTarget() function. So basically, I&#39;m<br>setting the speed to be a certain value in which every 5 points<br>the player gets, it&#39;ll be increased by a unit. I added 5 in<br>which it&#39;ll be like that starting speed of the game. This is all<br>in the Math.min method which gets the smallest number and makes sure it<br>doesn&#39;t exceed the moveSpeed which is 30. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I&#39;ve attempted in delaying the spawn of the square target by 2 seconds<br>which where as the player gets the green square, it&#39;ll kind of rapidly<br>start respawning in its random space.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T03.36.46image.png.webp?alt=media&token=3e46a455-58e2-4e7a-bf78-04764a56508d"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the event of playing, I stayed having 14 points but the green<br>target would spawn seconds later in a different position as it the player<br>gets the green square. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T03.40.53image.png.webp?alt=media&token=fe680bf9-c2d8-4a32-b9cf-46cea097aab5"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the event of playing, I stayed having 14 points but the green<br>target would spawn seconds later in a different position as it the player<br>gets the green square. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T02.58.46image.png.webp?alt=media&token=53085421-d8f0-4e20-9f7c-ed49eba7545b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Simply added a variable that contained the 2 seconds which is displayed as<br>2000<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-05T03.01.27image.png.webp?alt=media&token=54413ccb-6933-46d4-be0d-b180dd955868"/></td></tr>
<tr><td> <em>Caption:</em> <p>I used the setTimeout method in order to execute the moveTarget function until<br>the the squareDelay variable (time) is hit. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned how to use the canvas with html and js. Potentially create<br>my own type of art with it. Learned the steps to even start<br>and how to get the specific shape and color needed. Quite surprised it<br>used some evefnt listeners but understood how it joined with the canvas.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/hw-html5-canvas-game/grade/el286" target="_blank">Grading</a></td></tr></table>