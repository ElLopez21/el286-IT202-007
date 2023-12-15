<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Erik Lopez (el286)</td></tr>
<tr><td> <em>Generated: </em> 12/14/2023 9:22:49 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/el286" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T18.14.36image.png.webp?alt=media&token=cfc516d1-1d0f-4275-9df3-d0046d8f2e80"/></td></tr>
<tr><td> <em>Caption:</em> <p>Car creation table of getting the car id, make id, model name (name_m),<br>and make name info from the api to be inserted in those columns.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T18.19.42image.png.webp?alt=media&token=1366eb36-3e96-44e7-aa8a-9e22df7acdbb"/></td></tr>
<tr><td> <em>Caption:</em> <p>Alter table of adding the year as well. Testing to see of adding<br>another year depending on the user but just set it to the year<br>of 2020 only. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T18.23.10image.png.webp?alt=media&token=48b84913-d014-44f6-8061-9fa76c3e1be1"/></td></tr>
<tr><td> <em>Caption:</em> <p>Alter table in which I attempted in adding a column for the manual<br>data that was inserted from the car creation but didn&#39;t go will. Same<br>case of adding another column &quot;car_model&quot;. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>For the table CAR_DATA, I used the 1:1 key mapping from the &quot;example_mapping.php&quot;<br>provided and it&#39;s simply mapping the key from the car api to another<br>key which is from the my table on the $record array. I added<br>the se function in which it safely gets the values of the api<br>to be inserted in the DB but if there&#39;s no key, it&#39;ll simply<br>be a default value. Later on, I used a froeach loop in which<br>I&#39;m getting the data from $records to be for a singular $record. Each<br>singular record is being bind to the place holders of the sql prepared<br>to the actual columns/keys of my table.&nbsp; The prepare sql statement is this:<br>&quot; INSERT INTO CAR_DATA (car_id, make_id, name_m, make_name) VALUES (:carID, :makeID, :nameM, :makeName)<br>&quot;);<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/38/commits/fbf9bd77227f89364901827f8a5e89618146afbc">https://github.com/ElLopez21/el286-IT202-007/pull/38/commits/fbf9bd77227f89364901827f8a5e89618146afbc</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.11.31image.png.webp?alt=media&token=fbae526d-af43-49ec-a23b-0e549968f8e7"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the creation page with the valid info to submit.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.15.30image.png.webp?alt=media&token=f6f75989-8740-4f55-9191-db7651002d0f"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the error/validate messages. Due to how the creation page isn&#39;t really working,<br>it won&#39;t show a successful message. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.18.11image.png.webp?alt=media&token=5d3bfa0f-1c3b-48da-b55d-c0de85a080f2"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the error/validate messages. Due to how the creation page isn&#39;t really working,<br>it won&#39;t show a successful message. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.19.15image.png.webp?alt=media&token=73301e22-0b37-48a9-8948-94b3a524b24e"/></td></tr>
<tr><td> <em>Caption:</em> <p>The api data is from the car_id to make_name and from car_name to<br>car_model is what I attempted in using for the manual data being created,<br>however, it doesn&#39;t work. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>The id which is considered to be the primary key is what makes<br>each record of my table to be unique in a way. If some<br>data is inserted manually, an id will be generated uniquely for that data.<br>I used DISTINCT to which it eliminates the duplicate record of the specified<br>columns. Not sure if that would count but that was for the api.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://el286-prod-7114b762171a.herokuapp.com/Project/admin/car_create.php">https://el286-prod-7114b762171a.herokuapp.com/Project/admin/car_create.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/41">https://github.com/ElLopez21/el286-IT202-007/pull/41</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T19.21.34image.png.webp?alt=media&token=a84868b7-da8f-41be-82ab-e7536a661b97"/></td></tr>
<tr><td> <em>Caption:</em> <ol>
<li>Indicating the API data from car id to make name. This also<br>shows one of the filtering examples which is getting 10 entries sorted by<br>the carID in an ascending order. The limit is also shown form 1-100.<br>I have an admin role which shows edit and delete. <br></li>
</ol>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T19.54.12image.png.webp?alt=media&token=bd404af5-20e6-4a15-ae73-a1f4d5b8b450"/></td></tr>
<tr><td> <em>Caption:</em> <p>1.1) Indicating the API data from car id to make name. This also<br>shows one of the filtering examples which is getting 7 entries sorted by<br>the model name in an ascending order. The limit is also shown form<br>1-100. I have an admin role which shows edit and delete. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T19.56.21image.png.webp?alt=media&token=0e52e432-59fb-4b5e-9e5f-ec1e7aa3eae9"/></td></tr>
<tr><td> <em>Caption:</em> <p>1.2) Indicating the API data from car id to make name. This also<br>shows one of the filtering examples which is getting 15 entries sorted by<br>the make name in an ascending order. The limit is also shown form<br>1-100. I have an admin role which shows edit and delete. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T20.03.32image.png.webp?alt=media&token=25d5556b-db11-4efb-a24d-940decadd292"/></td></tr>
<tr><td> <em>Caption:</em> <ol start="2">
<li>This was supposed to be part of the table but it wasn&#39;t<br>getting the created car info from the user and brought errors to which<br>I didn&#39;t include in the table as shown in the previous pictures. <br></li>
</ol>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T20.05.25image.png.webp?alt=media&token=3a49f1bf-1952-4419-be24-a3fc1035da63"/></td></tr>
<tr><td> <em>Caption:</em> <ol start="3">
<li>Here I&#39;m retrieving parameters like &#39;limit&#39;, &#39;sort, and &#39;direction from the query<br>string using the isset() $_GET. If  these aren&#39;t set, then its put<br>to default values like 10. Sql statement is then prepared to fetch the<br>necessary car data from my &#39;CAR_DATA&#39; table with its certain parameters. i used<br>&#39;DISTINCT&#39; in order to check that the rows are unique and in a<br>way check for duplicates. All that data being fetched is stored to $carData<br>as an associative array. <br></li>
</ol>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T20.14.07image.png.webp?alt=media&token=d55a5df3-dd0a-491e-8c97-6c2c81b35e79"/></td></tr>
<tr><td> <em>Caption:</em> <p>4)Added a an if statement to check that if the carData isn&#39;t empty<br>then it create the list of data to be displayed. If it&#39;s empty<br>then a <p> tag will be shown saying &quot;No results at this time&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>A logged in user and Admin user are able to view the car<br>list. However, only the user with the Admin role have access to the<br>features edit and delete. A user with no admin role can only access<br>the view link. The list data is showing cars from the year 2020.<br>Although, it doesn&#39;t show the year, it&#39;s added on the view link for<br>that information. The car Id is basically the id from the api that&#39;s<br>given. The filters /sort is getting the amount of entries that you want<br>from 1-100, pick the column that you want to get the info from,<br>and sort it by an ascending or descending order.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://el286-prod-7114b762171a.herokuapp.com/Project/car_list_samp.php">https://el286-prod-7114b762171a.herokuapp.com/Project/car_list_samp.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/39">https://github.com/ElLopez21/el286-IT202-007/pull/39</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/40">https://github.com/ElLopez21/el286-IT202-007/pull/40</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> View Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T20.20.54image.png.webp?alt=media&token=5af7e06c-1d49-4421-82a3-cb9bbba98388"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the overall details of that specific car that was selected <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T21.17.08image.png.webp?alt=media&token=fa47e9c6-98cf-43b3-b2c5-7c11efb6149e"/></td></tr>
<tr><td> <em>Caption:</em> <p>This where if there&#39;s basically an invalid ID it&#39;ll redirect back to the<br>list data. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>The only extra details I&#39;m showing in this view is the make_id and<br>the year of the car. Each make of car has its own id<br>to which a user can obtain and used to go by in the<br>list of data. As said before, the edit and delete is only with<br>the role of Admin.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://el286-prod-7114b762171a.herokuapp.com/Project/car_view.php?id=3">https://el286-prod-7114b762171a.herokuapp.com/Project/car_view.php?id=3</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/40">https://github.com/ElLopez21/el286-IT202-007/pull/40</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-14T22.36.38image.png.webp?alt=media&token=9aec80eb-f862-4f9b-84de-f4417980168e"/></td></tr>
<tr><td> <em>Caption:</em> <p>Essentially it should prefill the data from the creation page to whatever that<br>was created, however, the creating a car is currently not working and giving<br>me an error. Which is why there&#39;s nothing be prefilled. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T00.06.18image.png.webp?alt=media&token=fe02d0c3-6196-4d1e-a16d-0606893ac88a"/></td></tr>
<tr><td> <em>Caption:</em> <p>There&#39;s validation from the server side to check if it&#39;s empty or contains<br>some specific characters other than letters, numbers, and spaces. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T00.09.26image.png.webp?alt=media&token=acd3d612-416d-4abe-8cb2-12db2b47f107"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows whether the id parameter is set in the query string and<br>if it&#39;s not then it&#39;ll redirect it to the car list page with<br>a flash message. It&#39;ll retrieve the car id and later prepare to select<br>a car from the db by the car id given from the api.<br>It then checks if the car id selected exists or not. It later<br>on shows the validation using regex. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://el286-prod-7114b762171a.herokuapp.com/Project/admin/car_edit.php?id=3">https://el286-prod-7114b762171a.herokuapp.com/Project/admin/car_edit.php?id=3</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/42">https://github.com/ElLopez21/el286-IT202-007/pull/42</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T00.25.56image.png.webp?alt=media&token=3d0fd62e-b9d3-408c-bdca-1449c25c174b"/></td></tr>
<tr><td> <em>Caption:</em> <p>The deletion goes along with the creation part but in this case there&#39;s<br>nothing manual to delete. Although you&#39;re able see how it would delete a<br>row with the specified car id and the car id in this case<br>is 10, it&#39;s focusing more on the api part of things which is<br>not what I&#39;d want I think. There&#39;s a message where it asks the<br>user if they&#39;re sure in deleting in a <p> tag. I&#39;m a user<br>that has the admin role in which I&#39;m able to delete some car.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T00.37.19image.png.webp?alt=media&token=c0d9d7bb-d5a3-4de7-8030-2bb39548327e"/></td></tr>
<tr><td> <em>Caption:</em> <p>similar to the previous pages, getting a db connection using getDB(). Checking to<br>see if the id is set in the query string to which it&#39;ll<br>display the id of that car being selected. The sql statement is then<br>prepared to fetch the car_id  and if it&#39;s not found, a flash<br>message will apear and redirect to the given location. The car_id is being<br>retrieved from the post data to which a delete sql statement occurs to<br>delete a car by its id. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>In this page, there isn&#39;t some role/permission check, however, that&#39;s being show in<br>my car_list_samp.php to where if the user has the role of admin, it&#39;ll<br>be able to delete. The user who doesn&#39;t have Admin role, won&#39;t be<br>able to even see the option of deleting or editing. The deletion would<br>be considered to be a hard delete if the creation worked to demonstrated<br>but the code is set for it be a hard delete. The user<br>would have to recreate a car.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/43">https://github.com/ElLopez21/el286-IT202-007/pull/43</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.37.40image.png.webp?alt=media&token=912dca86-6b0b-493a-b57d-b494bd01c15f"/></td></tr>
<tr><td> <em>Caption:</em> <p>mapping part 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.38.36image.png.webp?alt=media&token=6bac7dee-b241-4ecd-8df9-387b04c6e57a"/></td></tr>
<tr><td> <em>Caption:</em> <p>mapping part 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.39.53image.png.webp?alt=media&token=a3a00d02-03ee-4fc8-a89f-b5a52da14844"/></td></tr>
<tr><td> <em>Caption:</em> <p>duplicate being handled <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T01.40.30image.png.webp?alt=media&token=1dd4e002-b96a-473e-ade3-01638e152ea4"/></td></tr>
<tr><td> <em>Caption:</em> <p>fetching data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p><b>Same answer from previous respond:</b><br>For the table CAR_DATA, I used the 1:1 key<br>mapping from the &quot;example_mapping.php&quot; provided and it&#39;s simply mapping the key from the<br>car api to another key which is from the my table on the<br>$record array. I added the se function in which it safely gets the<br>values of the api to be inserted in the DB but if there&#39;s<br>no key, it&#39;ll simply be a default value. Later on, I used a<br>froeach loop in which I&#39;m getting the data from $records to be for<br>a singular $record. Each singular record is being bind to the place holders<br>of the sql prepared to the actual columns/keys of my table.&nbsp; The prepare<br>sql statement is this: &quot; INSERT INTO CAR_DATA (car_id, make_id, name_m, make_name) VALUES<br>(:carID, :makeID, :nameM, :makeName) &quot;);&nbsp;<br><br><b>Use of api data:</b><br>I&#39;m getting all of the 2020<br>cars and letting the user to view it and essentially favorite it which<br>was my goal.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/38">https://github.com/ElLopez21/el286-IT202-007/pull/38</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ElLopez21/el286-IT202-007/pull/40">https://github.com/ElLopez21/el286-IT202-007/pull/40</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What issues did you face and overcome during this milestone?</td></tr>
<tr><td> <em>Response:</em> <p>I faced the issue of truly comprehending on how to fetch the data<br>from my api and to map it so it can be inserted onto<br>my table. With the help of the professor I was able to put<br>some pieces together and came to find a way fetch and map it.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> What did you find the easiest?</td></tr>
<tr><td> <em>Response:</em> <p>Adding the view, edit, and delete felt simple when the fetching and mapping<br>part was already settled. Having those two done made the process a bit<br>much smoother.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> What did you find the hardest?</td></tr>
<tr><td> <em>Response:</em> <p>The hardest was genuinely fetching and mapping but also the tables in which<br>I had questions on how to utilize it. I understood on how to<br>use the url and features of the get() function but I wasn&#39;t really<br>getting the result I wanted from my api.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>I would say the make_id from the api to which it gives me<br>the name of the make. Therefore, its id represents the make of the<br>car.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fel286%2F2023-12-15T02.16.14image.png.webp?alt=media&token=16a639a3-161d-47df-813f-e6bdb5db0b25"/></td></tr>
<tr><td> <em>Caption:</em> <p>Milestone2 project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/el286" target="_blank">Grading</a></td></tr></table>