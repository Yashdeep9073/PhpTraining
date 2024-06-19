<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section>
  <div class="grid grid-cols-1 lg:grid-cols-2">
    <div class="flex items-center justify-center px-4 py-10 sm:px-6 sm:py-16 lg:px-8 lg:py-24">
      <div class="xl:mx-auto xl:w-full xl:max-w-sm 2xl:max-w-md">
        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">
          Sign up
        </h2>
        <p class="mt-2 text-base text-gray-600">
          Already have an account?
          <a
            href="#"
            title=""
            class="font-medium text-black transition-all duration-200 hover:underline"
          >
            Sign In
          </a>
        </p>
        <form action="#" method="POST" class="mt-8">
          <div class="space-y-5">
            <div>
              <label for="name" class="text-base font-medium text-gray-900">
                Full Name
              </label>
              <div class="mt-2">
                <input
                  class="flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
                  type="text"
                  placeholder="Full Name"
                  id="name"
                  name="Full name"
                />
              </div>
            </div>
            <div>
              <label for="email" class="text-base font-medium text-gray-900">
                Email address
              </label>
              <div class="mt-2">
                <input
                  class="flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
                  type="email"
                  placeholder="Email"
                  id="email"
                  name="email"

                />
              </div>
            </div>
            <div>
              <div class="flex items-center justify-between">
                <label
                  for="password"
                  class="text-base font-medium text-gray-900"
                >
                  Password
                </label>
              </div>
              <div class="mt-2">
                <input
                  class="flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
                  type="password"
                  placeholder="Password"
                  id="password"
                  name="password"
                />
              </div>
            </div>
            <div>
              <button
                type="button"
                class="inline-flex w-full items-center justify-center rounded-md bg-black px-3.5 py-2.5 font-semibold leading-7 text-white hover:bg-black/80"
              >
                Create Account
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="ml-2"
                >
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
    <div class="h-full w-full">
      <img
        class="mx-auto h-full w-full rounded-md object-cover"
        src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1742&amp;q=80"
        alt=""
      />
    </div>
  </div>
</section>


</body>
</html>
<?php
 
      $x = 5;
      echo $x;
      echo "<br />";
      echo $x+++$x++;
      echo "<br />";
      echo $x;
      echo "<br />";
      echo $x---$x--;
      echo "<br />";
      echo $x;
//  echo $x;

?>