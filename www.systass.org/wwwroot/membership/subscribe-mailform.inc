<!-- http://www.brainjar.com/asp/formmail/ -->
<form action="/CGI_BIN/formmail.asp" method="post">
<div>
<input name="_recipients" type="hidden" value="webbie@systass.org" />
<input name="_subject" type="hidden" value="Membership Subscription" />
<input name="_requiredFields" type="hidden" value="Name,Institute,Address,City,Postcode,Country,Email Address,Research Interests" />
<input name="_replyToField" type="hidden" value="Email Address" />
<input name="_continueUrl" type="hidden" value="/membership/indexwithpaypal-2.shtml" />
Title: <input name="Title" type="text" /><br />
Name: <input name="Name" type="text" /><br />
Institute: <input name="Institute" type="text" /><br />
Address: <input name="Address" type="text" /><br />
City: <input name="City" type="text" /><br />
Postal/Zip code: <input name="Postcode" type="text" /><br />
Country: <input name="Country" type="text" /><br />
Telephone:  <input name="Telephone" type="text" /><br />
Email Address: <input name="Email Address" type="text" /><br />
*Supervisor: <input name="Supervisor" type="text" />* student applications<br />
Research Interests:<br />
<input name="Research Interests" rows=5 cols=50></textarea><br />
Comments:<br />
<textarea name="Comments" rows=5 cols=50></textarea>
<input type="submit" value="Submit" />
<input type="reset" value="Clear" />
</div>
</form>
