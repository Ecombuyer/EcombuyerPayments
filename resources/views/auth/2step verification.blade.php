<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>2-Step Verification - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
  <!-- CSS files -->
  <link href="./dist/css/tabler.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/demo.min.css?1692870487" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }

    #verify-button {
      background: #6e93f7;
    }

    #verify-button {
      background: #6e93f7;
      pointer-events: none;
    }

    #verify-button.active {
      background: #6e93f7;
      pointer-events: auto;
    }

    #verify-button:hover {
      background: #114ae6;
    }
  </style>
</head>

<body class=" d-flex flex-column">
  <script src="./dist/js/demo-theme.min.js?1692870487"></script>
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </div>
      <form class="card card-md" action="./" method="get" autocomplete="off" novalidate>
        <div class="card-body">
          <h2 class="card-title card-title-lg text-center mb-4">Authenticate Your Account</h2>
          <p class="my-4 text-center">Please confirm your account by entering the authorization code sent to <strong>+1 856-672-8552</strong>.</p>
          <div class="my-5">
            <div class="row g-2">
              <div class="col">
                <div class="row g-5">
                  <div class="col">
                    <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                  </div>
                  <div class="col">
                    <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                  </div>
                  <div class="col">
                    <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                  </div>
                  <div class="col">
                    <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                  </div>
                </div>
              </div>
              <!-- <div class="col">
                  <div class="row g-2">
                    <div class="col">
                      <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-lg text-center py-3" maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                    </div>
                  </div>
                </div> -->
            </div>
          </div>
          <div class="form-footer">
            <div class="btn-list flex-nowrap">
              <a href="./2-step-verification.html" class="btn w-100">
                Cancel
              </a>
              <a href="#" class="btn btn-primary w-100" id="verify-button">
                Verify
              </a>
            </div>
          </div>
        </div>
      </form>
      <div class="text-center text-secondary mt-3">
        It may take a minute to receive your code. Haven't received it? <a href="./">Resend a new code.</a>
      </div>
    </div>
  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js?1692870487" defer></script>
  <script src="./dist/js/demo.min.js?1692870487" defer></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var inputs = document.querySelectorAll('[data-code-input]');
      // Attach an event listener to each input element
      for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('input', function(e) {
          // If the input field has a character, and there is a next input field, focus it
          if (e.target.value.length === e.target.maxLength && i + 1 < inputs.length) {
            inputs[i + 1].focus();
          }
        });
        inputs[i].addEventListener('keydown', function(e) {
          // If the input field is empty and the keyCode for Backspace (8) is detected, and there is a previous input field, focus it
          if (e.target.value.length === 0 && e.keyCode === 8 && i > 0) {
            inputs[i - 1].focus();
          }
        });
      }
    });
    document.addEventListener('DOMContentLoaded', function() {
      const inputs = document.querySelectorAll('input[data-code-input]');
      const verifyButton = document.getElementById('verify-button');

      inputs.forEach(input => {
        input.addEventListener('input', function() {
          const allFilled = Array.from(inputs).every(input => input.value.trim() !== '');
          if (allFilled) {
            verifyButton.removeAttribute('disabled');
            verifyButton.classList.add('active');
            verifyButton.style.backgroundColor = '#114ae6'; // Change button color to blue
          } else {
            verifyButton.setAttribute('disabled', true);
            verifyButton.classList.remove('active');
            verifyButton.style.backgroundColor = '#6e93f7'; // Change button color back to default
          }
        });
      });
    });
  </script>
</body>

</html>