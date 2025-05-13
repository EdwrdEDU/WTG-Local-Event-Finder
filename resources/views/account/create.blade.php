<x-layout>
  <div class="account-container">
      <div class="container-inner">
          <h2 class="text-banner">Sign-Up</h2>

          <form action="/" method="POST" class="space-y-4">
              @csrf
                <div class="account-item">
                  <label for="firstname">First Name</label>
                  <input class="input-field" type="text" id="first_name" name="first_name" required>
                </div>

                <div class="account-item">
                  <label for="lastname">Last Name</label>
                  <input class="input-field" type="text" id="last_name" name="last_name" required>
                </div>

                <div class="account-item">
                  <label for="email">Email</label>
                  <input class="input-field" type="email" id="email" name="email" required>
                </div>

                <div class="account-item">
                  <label for="password">Password</label>
                  <input class="input-field" type="password" id="password" name="password" required>
                </div>

                <div class="account-item">
                  <label for="passwordconfirmation">Confirm Password</label>
                  <input class="input-field" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="create-button">
                    <button type="submit" style="background: none; border: none; color: white;">Create Account</button>
                </div>
          </form>

          <p class="already">Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a>.</p>
      </div>
  </div>
</x-layout>
