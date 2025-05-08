<style>
  * {
    box-sizing: border-box;
    font-family: "Inter", "Segoe UI", sans-serif;
  }

  body {
    background: #f9f9fb;
    color: #333;
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
    padding: 20px;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -12px;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 12px;
  }

  .col-25 {
    flex: 25%;
  }

  .col-50 {
    flex: 50%;
  }

  .col-75 {
    flex: 75%;
  }
  h3 {
  font-family: 'Arial', sans-serif;  /* Clean, modern font */
  font-size: 24px;                  /* Slightly larger font size */
  font-weight: 600;                 /* Bold for emphasis */
  color: #333;                     /* Dark grey for a modern, softer look than black */
  letter-spacing: 1px;              /* Slight letter spacing for improved readability */
  text-transform: uppercase;        /* Uppercase for a more structured look */
  margin-bottom: 15px;              /* Space below the heading */
  border-bottom: 2px solid  rgb(190, 172, 6); /* Green border for a pop of color */
  padding-bottom: 10px;             /* Space between text and border */
}


  .container {
    background-color: #ffffff;
    padding: 30px;
    border: none;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s ease;
  }

  .container:hover {
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
  }

  input[type="text"] {
    width: 100%;
    padding: 14px 16px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fdfdfd;
    transition: border-color 0.3s, box-shadow 0.3s;
  }

  input[type="text"]:focus {
    border-color: #4caf50;
    box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.1);
    outline: none;
  }

  label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #555;
  }

  .icon-container {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    font-size: 28px;
  }

  .icon-container i {
    transition: transform 0.3s ease;
  }

  .icon-container i:hover {
    transform: scale(1.2);
  }
  .btn-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-top: 20px; /* Adjust space from the top if needed */
  }

  .btn {
    background-color:rgb(10, 10, 10);
    color: #fff;
    padding: 14px;
    margin: 0;
    border: none;
    width: 35%;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }

  .btn:hover {
    background-color:rgb(156, 149, 46);
    transform: translateY(-1px);
  }

  input[type="checkbox"] {
    margin-right: 10px;
    accent-color:rgb(167, 142, 0);
  }

  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>
<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-1R1UazH7N1UyQ4NTG9cU5hMvJZPp3x9PSM3QQpGhA2O6ECPsECz0HkTkFqW63HyYcE9EILiBQ7TgBVPyq0EgsA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input
              type="text"
              id="fname"
              name="firstname"
              placeholder="John M. Doe"
            />
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input
              type="text"
              id="email"
              name="email"
              placeholder="john@example.com"
            />
            <label for="adr"><i class="fa-solid fa-house"></i> Address</label>
            <input
              type="text"
              id="adr"
              name="address"
              placeholder="542 W. 15th Street"
            />
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input
              type="text"
              id="city"
              name="city"
              placeholder="Pretoria,Johannesburg"
            />

            <div class="row">
              <div class="col-50">
                <label for="zip">
                  <i class="fa-solid fa-map-pin"></i>
                  Postal Code
                </label>
                <input type="text" id="zip" name="zip" placeholder="1030" />
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa-brands fa-cc-visa" style="color: navy"></i>
             <i class="fa-solid fa-credit-card" style="color: #6772e5;"></i>
              <i class="fa-brands fa-cc-mastercard" style="color: red"></i>
              <i class="fa-brands fa-cc-mastercard" style="color: orange"></i>
            </div>

            <label for="cname">Name on Card</label>
            <input
              type="text"
              id="cname"
              name="cardname"
              placeholder="John More Doe"
            />
            <label for="ccnum">Card Number</label>
            <input
              type="text"
              id="ccnum"
              name="cardnumber"
              placeholder="1111-2222-3333-4444"
            />
            <label for="expmonth">Exp Month</label>
            <input
              type="text"
              id="expmonth"
              name="expmonth"
              placeholder="September"
            />

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input
                  type="text"
                  id="expyear"
                  name="expyear"
                  placeholder="2018"
                />
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" />
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" /> Shipping
          address same as billing
        </label>
        <!-- <input type="submit" value="Continue to checkout" class="btn" /> -->
        <div class="btn-container">
          <input type="submit" value="Continue to checkout" class="btn" />
        </div>
      </form>
    </div>
  </div>
</div>
