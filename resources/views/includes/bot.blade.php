<style>



    /* Button used to open the chat form - fixed at the bottom of the page */
    .open-button {
      background-color: #555;
      color: white;
      padding: 16px 20px;
      border: none;
      border-radius: 4px;
      outline: none;
      cursor: pointer;
      opacity: 0.9;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 350px;
      display: block;
      z-index: 19;
    }
    
    /* The popup chat - hidden by default */
    .chat-popup {
      display: none;
      position: fixed;
      bottom: 23px;
      right: 28px;
      
      z-index: 19;
    }
    
    /* Add styles to the form container */
    .form-container {
        
      max-width: 350px;
      
      background-color: transparent;
    }
    
    /* Set a style for the submit/send button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      /* padding: 16px 20px; */
      /* border: none; */
      cursor: pointer;
      width: 388px;
      /* margin-bottom:10px; */
      opacity: 0.9;
    }
    
    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;

      padding: 16px 20px;
      border: none;
      border-radius: 4px;
      outline: none;
      cursor: pointer;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 350px;
    }
    
    /* Add some hover effects to buttons */
    .form-container .btn:hover .open-button:hover {
      opacity: 1;
    }
</style>
    <button class="open-button" onclick="openForm()">Chat with SiBi</button>

    <div class="chat-popup" id="myForm">
        <form class="form-container">
            <iframe
            allow="microphone;"
            width="350"
            height="430"
            src="https://console.dialogflow.com/api-client/demo/embedded/4ce60952-89ed-48fc-9d21-2631f56996f5">
        </iframe><br><br><br><br>
          <button type="button" class="btn cancel" style="height: 58px" onclick="closeForm()"  >Close</button>
      </form>
    </div>
    
    
    
    <script>
        function openForm() {
        document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>
    