<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Rubik&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="customer.css">

 <title>Customer Survey Form</title>
</head>

<body>

 <div class="main">
  <header class="header">
    <h1 id="title">Customer Survey Form</h1>
  <p id="description">Thank you for taking the time to help us improve our services </p>
  </header>
  
  <form id="survey-form"  action="submit.php" action="POST">
    <div class="survey-group">
      <label for="name" id="name-label">*Name</label>
      <input 
        id="name" 
        type="text" 
        name="input-name"
        class="form-input"
        placeholder= "Write Name" required
      />
    </div>

    <div class="survey-group">
      <label for="email" id="email-label">*Email</label>
      <input 
        id="email" 
        type="email"
        name="email"
        class="form-input"
        placeholder="Enter email" required
      />
    </div>

    <div class="survey-group">
      <label for="number" id="number-label">*Age </label>
      <input 
        id="number" 
        type="number"
        name="age" 
        min="1" max="130" 
        class="form-input"
        placeholder="Age" required
       />
    </div>
    
    <div class="survey-group">
      <p>What service did you buy?</p>
      <label>
        <input
          name="service"
          value="website"
          class="user-service"
          type="checkbox"
        />Website</label>

      <label>
        <input
          name="service"
          value="site-maintenance"
          class="user-service"
          type="checkbox"
        />Site Maintenance</label>

      <label>
        <input
          name="service"
          value="deployment"
          class="user-service"
          type="checkbox"
        />Deployment Service</label>

       <label>
        <input
          name="service"
          value="hosting"
          class="user-service"
          type="checkbox"
        />Site Hosting</label>
        
    </div>
    <div class="survey-group">
      <label>How did you hear about us? </label>
      <select for="dropdown" id="dropdown" class="form-input">
        <option  disabled selected value>Select an Option</option>
        <option value="friend">A Friend</option>
        <option value="online">Online</option>
        <option value="newspaper">Newspaper</option>
        <option value="recommendation">Recommendation</option>
        <option value="others">Others</option>
      </select>
    </div>
    
    <div class="survey-group">
      <p>Would you recommend us to a friend</p>
      <label>
         <input
             name="recommend"
             type="radio"
             class="recommend-radio"
             value="definitely" checked
      />Definitely</label> 
      
      <label>
        <input
          name="recommend"
          type="radio"
          class="recommend-radio"
          value="maybe"
        />Maybe</label>

      <label>
        <input
          name="recommend"
          value="not-sure"
          type="radio"
          class="recommend-radio"/>Not Sure</label>
    </div>

    <div class="survey-group">
      <p>What would you like to see improved? <span class="hint">(check all that apply)</span></p>
      <label>
        <input
          name="improvement"
          value="requirement-collection"
          type="checkbox"
          class="user-improve"/>Requirement Collection</label>

      <label>
        <input
          name="improvement"
          value="documentation"
          type="checkbox"
          class="user-improve"/>Documentation</label>

      <label>
        <input
          name="improvement"
          value="customer-service"
          type="checkbox"
          class="user-improve"/>Customer Service</label>

      <label>
        <input
          name="improvement"
          value="testing"
          type="checkbox"
          class="user-improve"/>Testing</label>

      <label>
        <input
          name="improvement"
          value="deployment"
          type="checkbox"
          class="user-improve"/>Deployment</label>
         
    </div>

    <div class="survey-group">
      <p>Any comments or suggestions?</p>
      <textarea name="comment" class="textArea" placeholder="Enter your comment here..."></textarea>
    </div>
    <div class="survey-group">
      <button type="submit" id="submit">Submit</button>
    </div>

  </form>

</div>


</body>
</html>