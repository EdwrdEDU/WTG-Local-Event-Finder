<x-layout>
  <div class="account-container-login">
      <div class="container-inner">
          <h2 class="text-banner">Login</h2>

          <form action="/login" method="POST" class="space-y-4">
              @csrf

              <div class="account-item">
                  <label for="email">Email</label>
                  <input class="input-field" type="email" id="email" name="email" required>
              </div>

              <div class="account-item">
                  <label for="password">Password</label>
                  <input class="input-field" type="password" id="password" name="password" required>
              </div>

              <div class="create-button">
                  <button type="submit" style="background: none; border: none; color: white;">Login</button>
              </div>
          </form>
          <p class="dont"><a href="/reset-password" class="text-blue-600 hover:underline">Forgot your password</a></p>
          <p class="dont">Don't have an account? <a href="/create-account" class="text-blue-600 hover:underline">Sign up here</a>.</p>
      </div>
  </div>
</x-layout>
