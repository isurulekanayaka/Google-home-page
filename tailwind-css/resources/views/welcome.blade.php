<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen">
    <ul class="flex items-center justify-end gap-5 pt-5 pr-5 text-sm">
        <li>
            <a class="hover:underline" href="#">Gmail</a>
        </li>
        <li>
            <a class="hover:underline" href="#">Image</a>
        </li>
        <li>
            <a class="" href="#">
                <svg class="p-2 rounded-full w-9 h-9 hover:bg-gray-100" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path><image src="https://ssl.gstatic.com/gb/images/bar/al-icon.png" alt="" height="24" width="24" style="border:none;display:none \9"></image></svg>
            </a>
        </li>
        <li>
            <a href="#" class= " bg-[#1a73e8] px-8 py-2 text-white rounded-md hover:bg-blue-600">Sign in</a>
        </li>
    </ul>

    <div class="flex flex-col items-center mt-16 grow">
        <img class="w-[272px] h-[92px] " src="https://images.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="">
        <div class="flex w-full max-w-screen-sm gap-4 px-2 py-2 mt-6 border rounded-full hover:shadow-lg">
            <svg class="h-[24px] w-[24px]" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-iml="1700543992785"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
            <input class="focus:outline-none grow" type="text">
            <svg class="h-[24px] w-[24px]" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-iml="1700543992785"><path fill="#4285f4" d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z"></path><path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path><path fill="#fbbc05" d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z"></path><path fill="#ea4335" d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z"></path></svg>
            <svg class="h-[24px] w-[24px]" focusable="false" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" data-iml="1700543992785"><rect fill="none" height="192" width="192"></rect><g><circle fill="#34a853" cx="144.07" cy="144" r="16"></circle><circle fill="#4285f4" cx="96.07" cy="104" r="24"></circle><path fill="#ea4335" d="M24,135.2c0,18.11,14.69,32.8,32.8,32.8H96v-16l-40.1-0.1c-8.8,0-15.9-8.19-15.9-17.9v-18H24V135.2z"></path><path fill="#fbbc05" d="M168,72.8c0-18.11-14.69-32.8-32.8-32.8H116l20,16c8.8,0,16,8.29,16,18v30h16V72.8z"></path><path fill="#4285f4" d="M112,24l-32,0L68,40H56.8C38.69,40,24,54.69,24,72.8V92h16V74c0-9.71,7.2-18,16-18h80L112,24z"></path></g></svg>
            <a href="#"><svg class="h-[24px] w-[24px] text-blue-500 fill-current" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-iml="1700543992785"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></a>
        </div>
        <div class="flex gap-4 mt-5">
            <a class="px-4 py-2 border border-white rounded-lg bg-gray-50 hover:border-gray-200 hover:shadow" href="#"> Google search</a>
            <a class="px-4 py-2 border border-white rounded-lg bg-gray-50 hover:border-gray-200 hover:shadow" href=""> I'am Feeling Lucky</a>
        </div>
        <div>
            Google offered in:<a class="mx-4 text-blue-700 hover:underline" href="#">සිංහල</a> <a class="text-blue-700 hover:underline" href="#" >தமிழ்</a>
        </div> 
    </div>
    <footer>
        <div class="flex py-2 bg-gray-100 border-b border-gray-200">
            <p class="pl-4 ">Sri Lanka</p>
        </div>
        <div class="flex py-2 bg-gray-100 border-b border-gray-200">
            <ul class="flex gap-5 ml-4 grow">
                <li>About</li>
                <li>Advertising</li>
                <li>Business</li>
                <li>How Search works</li>
            </ul>    
            <ul class="flex gap-5 pr-4 ">
                <li>Privacy</li>
                <li>Terms</li>
                <li>Settings</li>
            </ul>
        </div>
    </footer>
</body>
</html>