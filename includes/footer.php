<!--<div class="contact-us">
    <form name="contact-form" id="contact-form" action="" method="POST">	
        <div id="contact-form-container">
            <span>CONTACT</span>
            <div class="bp-basics">
                <input type="text" name="full-name" class="add-placeholder bp-input required bp-var" title="Full Name*" id="full" placeholder="Full Name" style="color: rgb(137, 137, 137);">
                <input type="email" name="email" class="add-placeholder bp-input required bp-var" title="Email*" id="email" placeholder="Email" style="color: rgb(137, 137, 137);">
                <input type="tel" name="phone" class="add-placeholder bp-input" title="phone" id="phone" placeholder="Telephone" style="color: rgb(137, 137, 137);">
                <textarea name="message"  class="add-placeholder bp-input required" title="Message*" id="message" placeholder="Message" style="color: rgb(137, 137, 137);"></textarea>
                <div class="actions-container">
                    <input type="submit" title="Send" id="send" value="SEND IT"></input>
                    <input type="button" title="Reset" id="reset" value="RESET"></input>
                </div>
            </div>
            <div class="contact-footer-logo"></div>

        </div>
    </form>
</div>-->
<div class="contact-us">
	<form name="contact-form" id="contact-form" action="mail.php" method="post">
		<div class="contact-form-container">
					<hr></hr>
					<span>CONTACT</span>
					<hr></hr>
				<div class="bp-basics">
						<label for="">Full Name</label>
						<input id="contact_name" name="name"  type="text" placeholder="Full Name" />
						<label for="">Email</label>
						<input id="contact_email" name="email"  type="email" placeholder="Email" autocomplete="off"  />
						<label for="">Telephone</label>
						<input id="contact_phone" name="phone" class="phoneInput" type="text" placeholder="Telephone" autocomplete="off"  />
						<label for="">Message</label>
						<textarea id="contact_message" name="projectType" type="text" placeholder="Message" rows="1" cols="auto"></textarea>
						<div class="actions-container">
							<input type="submit" title="Send" id="send" value="SEND IT"></input>
							<input type="button" title="Reset" id="reset" onclick="clearInputs()" value="RESET"></input>
						</div>
				<div class="contact-footer-container">
					<img src="img/Mail.png" class="contact-footer-mail"></img>
					<img src="img/Telefono.png"></img>
				</div>
				</div>
				
		</div>
	</form>
</div>
</body>
</html>
<script>
function clearInputs(){
 document.getElementById('contact_name').value = "";
 document.getElementById('contact_email').value = "";
 document.getElementById('contact_message').value = "";
 document.getElementById('contact_phone').value = "";
}
</script>