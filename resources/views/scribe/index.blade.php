<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-register">
                                <a href="#endpoints-POSTapi-auth-register">Register a new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-login">
                                <a href="#endpoints-POSTapi-auth-login">Login user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cars">
                                <a href="#endpoints-GETapi-cars">Get all cars with pagination</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cars-featured">
                                <a href="#endpoints-GETapi-cars-featured">Get featured cars</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cars--car_id-">
                                <a href="#endpoints-GETapi-cars--car_id-">Get single car details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-cars-search">
                                <a href="#endpoints-POSTapi-cars-search">Search cars</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-auth-user">
                                <a href="#endpoints-GETapi-auth-user">Get authenticated user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-logout">
                                <a href="#endpoints-POSTapi-auth-logout">Logout user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-logout-all">
                                <a href="#endpoints-POSTapi-auth-logout-all">Logout from all devices</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-avatar">
                                <a href="#endpoints-POSTapi-auth-avatar">Upload user avatar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-auth-stats">
                                <a href="#endpoints-GETapi-auth-stats">Get user statistics</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-cars">
                                <a href="#endpoints-POSTapi-cars">Store a new car listing</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-cars--car_id-">
                                <a href="#endpoints-PUTapi-cars--car_id-">Update car listing</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-cars--car_id-">
                                <a href="#endpoints-DELETEapi-cars--car_id-">Delete car listing</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-cars--car_id--favorite">
                                <a href="#endpoints-POSTapi-cars--car_id--favorite">Toggle favorite status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user-cars">
                                <a href="#endpoints-GETapi-user-cars">Get user's car listings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user-favorites">
                                <a href="#endpoints-GETapi-user-favorites">Get user's favorite cars</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 11, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://127.0.0.1:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-auth-register">Register a new user</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"architecto\",
    \"phone\": \"ngzmiyvdljnikhwa\",
    \"password_confirmation\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "architecto",
    "phone": "ngzmiyvdljnikhwa",
    "password_confirmation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-register">
</span>
<span id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-register" data-method="POST"
      data-path="api/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-register"
                    onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-register"
                    onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-auth-register"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-register"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-auth-register"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-auth-register"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-auth-login">Login user</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"|]|{+-\",
    \"remember\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "|]|{+-",
    "remember": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
</span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-login"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Example: <code>|]|{+-</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remember</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-auth-login" style="display: none">
            <input type="radio" name="remember"
                   value="true"
                   data-endpoint="POSTapi-auth-login"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-auth-login" style="display: none">
            <input type="radio" name="remember"
                   value="false"
                   data-endpoint="POSTapi-auth-login"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-cars">Get all cars with pagination</h2>

<p>
</p>



<span id="example-requests-GETapi-cars">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/cars" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cars">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 46,
            &quot;title&quot;: &quot;Mercedes C-Class 2003&quot;,
            &quot;price&quot;: &quot;55442.00&quot;,
            &quot;year&quot;: 2022,
            &quot;mileage&quot;: 159837,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Rosaview, Tennessee&quot;,
            &quot;description&quot;: &quot;Odio laborum vitae illo sed nostrum sunt. In minima temporibus qui est dolorem eos corporis. Impedit non quam sequi debitis vero sit.\n\nEst et quia dolor dolores est similique voluptas quia. Sed amet tempora error impedit iure unde non. Natus quae ipsa inventore accusantium ipsum quisquam qui. Quo sunt suscipit laudantium maiores dolor.\n\nDebitis voluptas est voluptatibus quia quibusdam ut aut. Dolorum illum neque dolorem qui similique et. Molestias asperiores harum consequatur reprehenderit est. Consequatur minus tempora aut totam. Unde vitae provident nobis et ab modi.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 19,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(615) 722-7808&quot;,
            &quot;contact_email&quot;: &quot;morris88@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:25.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 46,
                &quot;engine&quot;: &quot;2.5L V6&quot;,
                &quot;power&quot;: &quot;220 HP&quot;,
                &quot;color&quot;: &quot;Green&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 4,
                &quot;body_type&quot;: &quot;Convertible&quot;,
                &quot;drive_type&quot;: &quot;fwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Mercedes C-Class 1973&quot;,
            &quot;price&quot;: &quot;16544.00&quot;,
            &quot;year&quot;: 2020,
            &quot;mileage&quot;: 87117,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;West Jovanhaven, Arkansas&quot;,
            &quot;description&quot;: &quot;Ut laborum amet sit qui et. Nam sapiente pariatur voluptates et quos. Ut ut id voluptatibus quaerat.\n\nSaepe dicta quo eveniet sapiente consectetur. Et non velit quae veniam dolor aliquam. Est earum distinctio adipisci autem consequatur omnis. Velit dolores sequi dolorem nulla dolores iusto. Qui voluptatem maiores dolorum dolorem sit.\n\nNisi odit nihil quia hic et. Quibusdam dolor magnam placeat quae distinctio laudantium sunt. Enim ducimus corporis perspiciatis sed id recusandae sit provident. Architecto nihil ipsa explicabo quis.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 62,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-219-858-2231&quot;,
            &quot;contact_email&quot;: &quot;pasquale21@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 2,
                &quot;engine&quot;: &quot;3.0L V6&quot;,
                &quot;power&quot;: &quot;150 HP&quot;,
                &quot;color&quot;: &quot;Silver&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 7,
                &quot;body_type&quot;: &quot;Hatchback&quot;,
                &quot;drive_type&quot;: &quot;rwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;BMW 3 Series 2019&quot;,
            &quot;price&quot;: &quot;5270.00&quot;,
            &quot;year&quot;: 2022,
            &quot;mileage&quot;: 168775,
            &quot;fuel_type&quot;: &quot;gasoline&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;East Ramonfort, Tennessee&quot;,
            &quot;description&quot;: &quot;Corporis est molestias et eum. Recusandae aut distinctio laudantium commodi. Qui vero dolore eum occaecati et ullam. Porro ea et sit aspernatur dolorum deserunt.\n\nTenetur officia beatae eum perferendis repellat. Quia quas odio veniam fugit dolor eos dolores. Quis voluptas dolor autem ut. Quod rerum ea impedit quia laudantium.\n\nArchitecto quam in tempora optio repellat iste. Possimus necessitatibus dolor facere vel. Nostrum suscipit eum numquam est voluptate. Minus deserunt quia corrupti quibusdam.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 753,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;267-274-1984&quot;,
            &quot;contact_email&quot;: &quot;ckunze@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Admin User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 3,
                &quot;engine&quot;: &quot;3.0L V6&quot;,
                &quot;power&quot;: &quot;180 HP&quot;,
                &quot;color&quot;: &quot;Gray&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 4,
                &quot;body_type&quot;: &quot;Convertible&quot;,
                &quot;drive_type&quot;: &quot;rwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;Mazda 6 1990&quot;,
            &quot;price&quot;: &quot;60967.00&quot;,
            &quot;year&quot;: 2013,
            &quot;mileage&quot;: 116087,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Schummtown, Delaware&quot;,
            &quot;description&quot;: &quot;Sed tempora delectus incidunt placeat vel asperiores. Ea qui nemo quia totam.\n\nA temporibus culpa laudantium amet quod. Et commodi autem et dolore repellat odio rerum. Voluptatum dolor sunt quae numquam deleniti fugit. Nihil blanditiis atque accusantium quisquam quibusdam non.\n\nEveniet atque nisi accusamus rerum velit. Deserunt temporibus cupiditate et est excepturi tenetur. Ea sed ipsa deserunt ut.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;https://thiel.com/a-omnis-quia-autem-iusto-dolore.html&quot;,
            &quot;views&quot;: 195,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;586-956-4214&quot;,
            &quot;contact_email&quot;: &quot;micheal00@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Admin User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 4,
                &quot;engine&quot;: &quot;1.6L I4&quot;,
                &quot;power&quot;: &quot;350 HP&quot;,
                &quot;color&quot;: &quot;Silver&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 7,
                &quot;body_type&quot;: &quot;Pickup&quot;,
                &quot;drive_type&quot;: &quot;awd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;Mercedes C-Class 1988&quot;,
            &quot;price&quot;: &quot;78138.00&quot;,
            &quot;year&quot;: 2022,
            &quot;mileage&quot;: 110205,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;North Hazlebury, Washington&quot;,
            &quot;description&quot;: &quot;Nisi dolores voluptas dolorum minus est. Recusandae in repudiandae dolore officiis. Dicta tenetur dolor est sunt nostrum delectus.\n\nAut aut et fugit in. Et sint illum illo molestias fuga laboriosam quod consequatur. Molestiae ullam aut libero quae quo temporibus. Aperiam sit repellat possimus doloribus blanditiis blanditiis odio.\n\nLabore ipsam vel voluptatem ipsam laboriosam officiis expedita. Aspernatur quia quidem ut est quaerat. Sed unde omnis consequuntur fugit. Perferendis et totam possimus exercitationem tenetur exercitationem qui.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: &quot;http://hoppe.com/aut-nostrum-error-totam-fugit-totam-maxime.html&quot;,
            &quot;views&quot;: 716,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;802.338.9544&quot;,
            &quot;contact_email&quot;: &quot;gerard10@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Admin User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 5,
                &quot;engine&quot;: &quot;1.6L I4&quot;,
                &quot;power&quot;: &quot;200 HP&quot;,
                &quot;color&quot;: &quot;Gold&quot;,
                &quot;doors&quot;: 2,
                &quot;seats&quot;: 5,
                &quot;body_type&quot;: &quot;Hatchback&quot;,
                &quot;drive_type&quot;: &quot;fwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Toyota Camry 1971&quot;,
            &quot;price&quot;: &quot;61599.00&quot;,
            &quot;year&quot;: 2015,
            &quot;mileage&quot;: 6733,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;cvt&quot;,
            &quot;location&quot;: &quot;Port Ginaside, District of Columbia&quot;,
            &quot;description&quot;: &quot;Eum totam molestias dolores nobis. Architecto accusantium sed voluptate nulla labore possimus rerum. Aliquid doloribus aut dolore eum. Corrupti dolor harum fugiat laudantium.\n\nCommodi beatae vitae doloribus amet aut. Et sed enim quod omnis ipsam illo. Saepe provident consequuntur et et eveniet accusantium.\n\nSit libero qui eligendi facere quas. Sed aut aut natus maxime. Unde vero aut consequuntur molestias.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 561,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;920.689.3892&quot;,
            &quot;contact_email&quot;: &quot;bwolf@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Admin User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 6,
                &quot;engine&quot;: &quot;4.0L V8&quot;,
                &quot;power&quot;: &quot;180 HP&quot;,
                &quot;color&quot;: &quot;Red&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 7,
                &quot;body_type&quot;: &quot;Wagon&quot;,
                &quot;drive_type&quot;: &quot;4wd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;Toyota Camry 1985&quot;,
            &quot;price&quot;: &quot;14752.00&quot;,
            &quot;year&quot;: 2016,
            &quot;mileage&quot;: 150848,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;West Nora, Virginia&quot;,
            &quot;description&quot;: &quot;Accusantium eius quisquam voluptates quibusdam. Delectus sunt earum ea accusamus accusamus quas nisi. In et quia aut facere.\n\nLaborum tempora reiciendis eum. Exercitationem reiciendis eligendi corrupti vel voluptatum veniam omnis. Sit ea labore dolorem officiis voluptatem fugit.\n\nExpedita quia ut optio vero minima sit sit. Et similique est sint officia. Aut adipisci quod facere temporibus.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;https://www.hahn.com/et-aut-soluta-laborum-ad&quot;,
            &quot;views&quot;: 276,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;240.842.8645&quot;,
            &quot;contact_email&quot;: &quot;friesen.nannie@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Admin User&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 7,
                &quot;engine&quot;: &quot;2.5L V6&quot;,
                &quot;power&quot;: &quot;250 HP&quot;,
                &quot;color&quot;: &quot;Green&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 2,
                &quot;body_type&quot;: &quot;Coupe&quot;,
                &quot;drive_type&quot;: &quot;awd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;BMW 3 Series 2014&quot;,
            &quot;price&quot;: &quot;44437.00&quot;,
            &quot;year&quot;: 2015,
            &quot;mileage&quot;: 66879,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;cvt&quot;,
            &quot;location&quot;: &quot;West Kennyport, Wyoming&quot;,
            &quot;description&quot;: &quot;Dicta est vero accusantium dolor autem sit dicta ut. Corrupti accusantium nostrum natus quia tempora magni. Iste minima id beatae.\n\nDolore quos non corporis nostrum enim. Eos aut occaecati saepe suscipit. Aspernatur quia voluptate nostrum sint quae in repudiandae ea.\n\nModi ex cumque nam placeat ut. Voluptas aut porro et voluptas ratione blanditiis error. Quae architecto ipsa mollitia architecto maiores enim perferendis. Possimus voluptas reiciendis aut eos rem quisquam ad quis.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 858,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-580-387-1539&quot;,
            &quot;contact_email&quot;: &quot;mjakubowski@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Daphney Beer&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 8,
                &quot;engine&quot;: &quot;3.0L V6&quot;,
                &quot;power&quot;: &quot;180 HP&quot;,
                &quot;color&quot;: &quot;Silver&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 5,
                &quot;body_type&quot;: &quot;Wagon&quot;,
                &quot;drive_type&quot;: &quot;rwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;BMW 3 Series 1976&quot;,
            &quot;price&quot;: &quot;6701.00&quot;,
            &quot;year&quot;: 2013,
            &quot;mileage&quot;: 108863,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Lake Jaspermouth, Georgia&quot;,
            &quot;description&quot;: &quot;Nemo illum debitis sequi eum soluta et. Natus et ipsam quisquam in et. Quas et molestiae excepturi dicta.\n\nAliquid dolorem quisquam ullam eum. Sint et culpa vel quaerat labore ipsum ea. Est quisquam omnis ex saepe rerum quidem. In eligendi dolorem reprehenderit sapiente molestiae.\n\nPossimus excepturi et magnam quas nisi ducimus similique. Nam ab expedita voluptas dolor iste. Excepturi ad rerum voluptas laboriosam porro iure. Hic repellendus ut eum eum quas ea laudantium esse.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 202,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1.423.386.5898&quot;,
            &quot;contact_email&quot;: &quot;josiane.ebert@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Blanca Ryan Jr.&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 9,
                &quot;engine&quot;: &quot;3.0L V6&quot;,
                &quot;power&quot;: &quot;350 HP&quot;,
                &quot;color&quot;: &quot;White&quot;,
                &quot;doors&quot;: 2,
                &quot;seats&quot;: 4,
                &quot;body_type&quot;: &quot;Sedan&quot;,
                &quot;drive_type&quot;: &quot;4wd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;Honda Accord 1975&quot;,
            &quot;price&quot;: &quot;53010.00&quot;,
            &quot;year&quot;: 2012,
            &quot;mileage&quot;: 22470,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Zemlakville, Wyoming&quot;,
            &quot;description&quot;: &quot;Laudantium quod rerum dolores temporibus eligendi. Harum sint saepe consequatur error. Harum commodi molestias accusamus error dolorem reiciendis. Ullam non sit doloribus quisquam.\n\nConsequatur dolor odio in. Dolorem rerum omnis vel. Deserunt excepturi debitis nisi id et dignissimos praesentium.\n\nAliquid necessitatibus sit voluptas molestiae deserunt minus. Laboriosam occaecati impedit qui ad voluptatem omnis necessitatibus accusantium. Soluta id libero nisi similique. Tenetur illo nam nam enim omnis praesentium.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;http://www.olson.info/dolorem-blanditiis-repellat-ut-ut-provident.html&quot;,
            &quot;views&quot;: 464,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-586-234-4913&quot;,
            &quot;contact_email&quot;: &quot;schiller.titus@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Blanca Ryan Jr.&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 10,
                &quot;engine&quot;: &quot;4.0L V8&quot;,
                &quot;power&quot;: &quot;150 HP&quot;,
                &quot;color&quot;: &quot;Silver&quot;,
                &quot;doors&quot;: 5,
                &quot;seats&quot;: 8,
                &quot;body_type&quot;: &quot;Sedan&quot;,
                &quot;drive_type&quot;: &quot;rwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;Volkswagen Passat 1972&quot;,
            &quot;price&quot;: &quot;64390.00&quot;,
            &quot;year&quot;: 2020,
            &quot;mileage&quot;: 168987,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Rogahnbury, Ohio&quot;,
            &quot;description&quot;: &quot;Id qui qui dignissimos repellendus eum ducimus molestiae. Nemo quidem saepe voluptas laborum velit placeat.\n\nSaepe vel aut expedita commodi eos ut maiores. Animi dolorem rem et ea voluptatem non. Molestias reprehenderit incidunt facilis fuga dolore debitis. Qui sapiente sapiente vel at.\n\nConsequatur reprehenderit in ut temporibus quos recusandae molestias voluptas. Aperiam debitis et illum quia fuga beatae. Et dignissimos unde est placeat voluptas sapiente quas mollitia.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 658,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(763) 360-4252&quot;,
            &quot;contact_email&quot;: &quot;pagac.mckenna@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Blanca Ryan Jr.&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 11,
                &quot;engine&quot;: &quot;2.5L V6&quot;,
                &quot;power&quot;: &quot;250 HP&quot;,
                &quot;color&quot;: &quot;Brown&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 2,
                &quot;body_type&quot;: &quot;Coupe&quot;,
                &quot;drive_type&quot;: &quot;4wd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;Audi A4 1997&quot;,
            &quot;price&quot;: &quot;10351.00&quot;,
            &quot;year&quot;: 2017,
            &quot;mileage&quot;: 75071,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Ledaburgh, Arkansas&quot;,
            &quot;description&quot;: &quot;Quisquam sunt ea qui possimus perspiciatis doloremque qui. Quam hic est molestiae voluptas ut amet. Animi est non debitis non id magni. Incidunt veritatis et quo quam commodi. Qui illo ab aut praesentium quam.\n\nSequi modi et odit in quidem. Temporibus aut itaque voluptatibus cupiditate voluptas sapiente ut neque. Et harum sed est fuga voluptatum pariatur voluptatem. Soluta necessitatibus expedita sequi quo est voluptatem vitae. A totam et quo officiis exercitationem non.\n\nExpedita sed aperiam sit voluptatibus ipsa nihil accusantium nobis. Officiis labore et aperiam quaerat debitis. Hic perferendis nesciunt consequatur.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;http://lang.com/maiores-amet-et-at-est&quot;,
            &quot;views&quot;: 7,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(478) 529-5337&quot;,
            &quot;contact_email&quot;: &quot;kennedi92@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Chasity Gislason&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 12,
                &quot;engine&quot;: &quot;1.8L Turbo&quot;,
                &quot;power&quot;: &quot;300 HP&quot;,
                &quot;color&quot;: &quot;White&quot;,
                &quot;doors&quot;: 5,
                &quot;seats&quot;: 2,
                &quot;body_type&quot;: &quot;Pickup&quot;,
                &quot;drive_type&quot;: &quot;4wd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 13,
            &quot;title&quot;: &quot;Volkswagen Passat 1985&quot;,
            &quot;price&quot;: &quot;43632.00&quot;,
            &quot;year&quot;: 2020,
            &quot;mileage&quot;: 198293,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;West Sydnibury, South Carolina&quot;,
            &quot;description&quot;: &quot;Quisquam et qui in aut. Labore asperiores in voluptatem accusantium nihil in.\n\nEst ducimus et doloribus enim. Quo modi praesentium neque unde hic molestiae. Illo aut nobis atque sed quo.\n\nVoluptatem vel assumenda perferendis est repellat ut maxime. Omnis corrupti et enim voluptatem molestiae omnis. Beatae nihil magni facere accusamus quam placeat et.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;http://www.weimann.com/repudiandae-voluptas-velit-maxime-enim-magnam-labore-ut&quot;,
            &quot;views&quot;: 923,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;1-732-558-3965&quot;,
            &quot;contact_email&quot;: &quot;heber.krajcik@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Chasity Gislason&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 13,
                &quot;engine&quot;: &quot;2.0L Turbo&quot;,
                &quot;power&quot;: &quot;180 HP&quot;,
                &quot;color&quot;: &quot;Brown&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 8,
                &quot;body_type&quot;: &quot;Convertible&quot;,
                &quot;drive_type&quot;: &quot;awd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 14,
            &quot;title&quot;: &quot;Audi A4 1992&quot;,
            &quot;price&quot;: &quot;9244.00&quot;,
            &quot;year&quot;: 2018,
            &quot;mileage&quot;: 69047,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Roobton, Washington&quot;,
            &quot;description&quot;: &quot;Reiciendis ducimus illum voluptatem. Et est quos consequatur ratione natus vitae voluptatem officia. Numquam consectetur delectus illo quas fugiat. Molestias vitae atque neque dolor dolorem sunt dolore.\n\nDolor corporis vel quibusdam neque iusto. Facere magnam ad odio asperiores non quis laborum. Accusantium et officia qui molestiae distinctio est aut.\n\nNumquam et ut voluptatem. Ut officiis dolorum consequatur. Voluptas unde error sequi et explicabo provident. Consequuntur qui voluptas ipsa ex nulla quo consequatur.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 447,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+18782566197&quot;,
            &quot;contact_email&quot;: &quot;cornelius.dubuque@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Chasity Gislason&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 14,
                &quot;engine&quot;: &quot;3.0L V6&quot;,
                &quot;power&quot;: &quot;350 HP&quot;,
                &quot;color&quot;: &quot;White&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 2,
                &quot;body_type&quot;: &quot;Hatchback&quot;,
                &quot;drive_type&quot;: &quot;fwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 15,
            &quot;title&quot;: &quot;Toyota Camry 1970&quot;,
            &quot;price&quot;: &quot;48026.00&quot;,
            &quot;year&quot;: 2010,
            &quot;mileage&quot;: 141215,
            &quot;fuel_type&quot;: &quot;electric&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Port Linwoodshire, Tennessee&quot;,
            &quot;description&quot;: &quot;Praesentium qui mollitia qui architecto. Deserunt velit ex qui dicta sit numquam earum impedit. Aliquid porro non beatae tempora laboriosam est. Quia vel id voluptatum facilis praesentium repellat.\n\nRerum officia inventore excepturi et. Qui molestiae ad et voluptatum minus. Et qui illo ipsam qui. Labore officiis unde neque odio reiciendis.\n\nVeritatis animi nulla quia nam et consectetur. Sapiente aut animi praesentium ipsa quidem. Tenetur alias laudantium eum dolorum quia.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 890,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(563) 877-7920&quot;,
            &quot;contact_email&quot;: &quot;sporer.lorenzo@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Chasity Gislason&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 15,
                &quot;engine&quot;: &quot;4.0L V8&quot;,
                &quot;power&quot;: &quot;200 HP&quot;,
                &quot;color&quot;: &quot;Silver&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 2,
                &quot;body_type&quot;: &quot;Hatchback&quot;,
                &quot;drive_type&quot;: &quot;fwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 16,
            &quot;title&quot;: &quot;Mazda 6 1997&quot;,
            &quot;price&quot;: &quot;58345.00&quot;,
            &quot;year&quot;: 2020,
            &quot;mileage&quot;: 13063,
            &quot;fuel_type&quot;: &quot;electric&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;East Leonieton, New Jersey&quot;,
            &quot;description&quot;: &quot;Illo non velit voluptatibus sunt repellendus rerum beatae quae. Iusto sit rerum ratione repellat modi numquam. Et nisi veniam voluptatum molestiae ducimus nihil tempora officia. Quia quo ut dolorem.\n\nIpsam et quam quo natus sapiente est. Velit ipsa vitae animi iste ea est. Quia molestiae eveniet et adipisci ut perferendis. Et necessitatibus cum neque iste nihil.\n\nEveniet ab necessitatibus et et illo. Quis officia facilis omnis. Autem quod id exercitationem autem eaque aut nobis quia.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 830,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(979) 669-5472&quot;,
            &quot;contact_email&quot;: &quot;susana.conroy@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Chasity Gislason&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 16,
                &quot;engine&quot;: &quot;4.0L V8&quot;,
                &quot;power&quot;: &quot;220 HP&quot;,
                &quot;color&quot;: &quot;Red&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 2,
                &quot;body_type&quot;: &quot;Convertible&quot;,
                &quot;drive_type&quot;: &quot;4wd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 17,
            &quot;title&quot;: &quot;Mercedes C-Class 1991&quot;,
            &quot;price&quot;: &quot;46831.00&quot;,
            &quot;year&quot;: 2011,
            &quot;mileage&quot;: 26675,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;West Adele, West Virginia&quot;,
            &quot;description&quot;: &quot;Laborum quas voluptates eos. Qui delectus libero in explicabo dolor.\n\nInventore ipsum facilis qui rerum. Incidunt sed sed sit id sunt et. Aperiam autem amet id et est molestiae possimus expedita. Praesentium est ut esse delectus recusandae commodi quae.\n\nAmet aliquid aspernatur molestias maiores quasi. Autem a soluta autem fuga suscipit dolor non. Veritatis temporibus cumque non porro. Accusamus et qui aut.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;http://fay.org/et-recusandae-impedit-suscipit-rerum-tempore&quot;,
            &quot;views&quot;: 991,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-912-280-4673&quot;,
            &quot;contact_email&quot;: &quot;madisyn.schulist@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Miss Laury Fisher Jr.&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 17,
                &quot;engine&quot;: &quot;4.0L V8&quot;,
                &quot;power&quot;: &quot;220 HP&quot;,
                &quot;color&quot;: &quot;Silver&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 7,
                &quot;body_type&quot;: &quot;Convertible&quot;,
                &quot;drive_type&quot;: &quot;awd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 18,
            &quot;title&quot;: &quot;Volkswagen Passat 1979&quot;,
            &quot;price&quot;: &quot;75865.00&quot;,
            &quot;year&quot;: 2010,
            &quot;mileage&quot;: 112708,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;cvt&quot;,
            &quot;location&quot;: &quot;West Sofia, Kansas&quot;,
            &quot;description&quot;: &quot;Fugit facilis natus in aut dolor distinctio voluptatem. Corporis omnis amet sed. Maxime omnis nihil et praesentium dignissimos sequi.\n\nNumquam quis dolorem dolorem sed quia magni eaque cumque. Soluta excepturi aut quo aut sequi ullam. Voluptatem dolore perspiciatis dolores et fuga corporis est. Deleniti laboriosam maxime nihil mollitia nostrum similique.\n\nQui id sint occaecati velit. Beatae vero magni veritatis maxime omnis. Corporis et excepturi dolores ipsum quia quis quo.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 869,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;505.986.2770&quot;,
            &quot;contact_email&quot;: &quot;funk.frances@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Prof. Jalon McKenzie III&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 18,
                &quot;engine&quot;: &quot;3.0L V6&quot;,
                &quot;power&quot;: &quot;200 HP&quot;,
                &quot;color&quot;: &quot;White&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 5,
                &quot;body_type&quot;: &quot;Coupe&quot;,
                &quot;drive_type&quot;: &quot;rwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 19,
            &quot;title&quot;: &quot;BMW 3 Series 1986&quot;,
            &quot;price&quot;: &quot;52564.00&quot;,
            &quot;year&quot;: 2011,
            &quot;mileage&quot;: 97628,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;South Krystal, Mississippi&quot;,
            &quot;description&quot;: &quot;Praesentium id ipsum fuga quia. Similique suscipit nulla exercitationem sunt sed. Et minima sit aut architecto ea. Aut saepe sunt praesentium laudantium molestias sit qui dolor.\n\nPlaceat pariatur optio et provident autem quo ad qui. Atque non dolores laboriosam quia. Officia a eligendi suscipit enim commodi minus.\n\nUt vel voluptatibus qui et asperiores ut perferendis. Hic aut autem rerum autem laudantium. Et enim accusamus molestiae nisi voluptas omnis minus.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 220,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(954) 333-0069&quot;,
            &quot;contact_email&quot;: &quot;iankunding@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Prof. Jalon McKenzie III&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 19,
                &quot;engine&quot;: &quot;4.0L V8&quot;,
                &quot;power&quot;: &quot;200 HP&quot;,
                &quot;color&quot;: &quot;White&quot;,
                &quot;doors&quot;: 3,
                &quot;seats&quot;: 7,
                &quot;body_type&quot;: &quot;Convertible&quot;,
                &quot;drive_type&quot;: &quot;awd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 20,
            &quot;title&quot;: &quot;Honda Accord 1987&quot;,
            &quot;price&quot;: &quot;71587.00&quot;,
            &quot;year&quot;: 2011,
            &quot;mileage&quot;: 68170,
            &quot;fuel_type&quot;: &quot;gasoline&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Wolffburgh, Minnesota&quot;,
            &quot;description&quot;: &quot;Iste sit voluptatem dicta dolores dignissimos ut sunt. Totam corrupti et dicta architecto harum pariatur. Voluptatum tempora dicta harum voluptas. Voluptate eos delectus itaque facilis nihil expedita nihil.\n\nOdit hic omnis minus sed pariatur est vitae. Sit mollitia aut minus et. Sapiente tempore repellat reprehenderit id. Soluta ad et fuga ratione maiores.\n\nEveniet architecto voluptate adipisci iure qui. Odio laboriosam et porro et libero. Ea eveniet nobis facilis aut in.&quot;,
            &quot;featured&quot;: false,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 569,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-361-814-2680&quot;,
            &quot;contact_email&quot;: &quot;leila.kuhn@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Prof. Jalon McKenzie III&quot;,
                &quot;email&quot;: null,
                &quot;phone&quot;: null,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null
            },
            &quot;images&quot;: [],
            &quot;specifications&quot;: {
                &quot;id&quot;: 20,
                &quot;engine&quot;: &quot;1.6L I4&quot;,
                &quot;power&quot;: &quot;350 HP&quot;,
                &quot;color&quot;: &quot;Gray&quot;,
                &quot;doors&quot;: 4,
                &quot;seats&quot;: 5,
                &quot;body_type&quot;: &quot;Coupe&quot;,
                &quot;drive_type&quot;: &quot;fwd&quot;
            },
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        }
    ],
    &quot;pagination&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 3,
        &quot;per_page&quot;: 20,
        &quot;total&quot;: 45,
        &quot;from&quot;: 1,
        &quot;to&quot;: 20
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cars" data-method="GET"
      data-path="api/cars"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cars"
                    onclick="tryItOut('GETapi-cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cars"
                    onclick="cancelTryOut('GETapi-cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-cars-featured">Get featured cars</h2>

<p>
</p>



<span id="example-requests-GETapi-cars-featured">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/cars/featured" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars/featured"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cars-featured">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 46,
            &quot;title&quot;: &quot;Mercedes C-Class 2003&quot;,
            &quot;price&quot;: &quot;55442.00&quot;,
            &quot;year&quot;: 2022,
            &quot;mileage&quot;: 159837,
            &quot;fuel_type&quot;: &quot;hybrid&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Rosaview, Tennessee&quot;,
            &quot;description&quot;: &quot;Odio laborum vitae illo sed nostrum sunt. In minima temporibus qui est dolorem eos corporis. Impedit non quam sequi debitis vero sit.\n\nEst et quia dolor dolores est similique voluptas quia. Sed amet tempora error impedit iure unde non. Natus quae ipsa inventore accusantium ipsum quisquam qui. Quo sunt suscipit laudantium maiores dolor.\n\nDebitis voluptas est voluptatibus quia quibusdam ut aut. Dolorum illum neque dolorem qui similique et. Molestias asperiores harum consequatur reprehenderit est. Consequatur minus tempora aut totam. Unde vitae provident nobis et ab modi.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 19,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(615) 722-7808&quot;,
            &quot;contact_email&quot;: &quot;morris88@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:25.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: &quot;test@example.com&quot;,
                &quot;phone&quot;: &quot;929.965.7005&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Mercedes C-Class 1973&quot;,
            &quot;price&quot;: &quot;16544.00&quot;,
            &quot;year&quot;: 2020,
            &quot;mileage&quot;: 87117,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;West Jovanhaven, Arkansas&quot;,
            &quot;description&quot;: &quot;Ut laborum amet sit qui et. Nam sapiente pariatur voluptates et quos. Ut ut id voluptatibus quaerat.\n\nSaepe dicta quo eveniet sapiente consectetur. Et non velit quae veniam dolor aliquam. Est earum distinctio adipisci autem consequatur omnis. Velit dolores sequi dolorem nulla dolores iusto. Qui voluptatem maiores dolorum dolorem sit.\n\nNisi odit nihil quia hic et. Quibusdam dolor magnam placeat quae distinctio laudantium sunt. Enim ducimus corporis perspiciatis sed id recusandae sit provident. Architecto nihil ipsa explicabo quis.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 62,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-219-858-2231&quot;,
            &quot;contact_email&quot;: &quot;pasquale21@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: &quot;test@example.com&quot;,
                &quot;phone&quot;: &quot;929.965.7005&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;Volkswagen Passat 1972&quot;,
            &quot;price&quot;: &quot;64390.00&quot;,
            &quot;year&quot;: 2020,
            &quot;mileage&quot;: 168987,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Rogahnbury, Ohio&quot;,
            &quot;description&quot;: &quot;Id qui qui dignissimos repellendus eum ducimus molestiae. Nemo quidem saepe voluptas laborum velit placeat.\n\nSaepe vel aut expedita commodi eos ut maiores. Animi dolorem rem et ea voluptatem non. Molestias reprehenderit incidunt facilis fuga dolore debitis. Qui sapiente sapiente vel at.\n\nConsequatur reprehenderit in ut temporibus quos recusandae molestias voluptas. Aperiam debitis et illum quia fuga beatae. Et dignissimos unde est placeat voluptas sapiente quas mollitia.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 658,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(763) 360-4252&quot;,
            &quot;contact_email&quot;: &quot;pagac.mckenna@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Blanca Ryan Jr.&quot;,
                &quot;email&quot;: &quot;ichristiansen@example.net&quot;,
                &quot;phone&quot;: &quot;938-988-2043&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:20.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 15,
            &quot;title&quot;: &quot;Toyota Camry 1970&quot;,
            &quot;price&quot;: &quot;48026.00&quot;,
            &quot;year&quot;: 2010,
            &quot;mileage&quot;: 141215,
            &quot;fuel_type&quot;: &quot;electric&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Port Linwoodshire, Tennessee&quot;,
            &quot;description&quot;: &quot;Praesentium qui mollitia qui architecto. Deserunt velit ex qui dicta sit numquam earum impedit. Aliquid porro non beatae tempora laboriosam est. Quia vel id voluptatum facilis praesentium repellat.\n\nRerum officia inventore excepturi et. Qui molestiae ad et voluptatum minus. Et qui illo ipsam qui. Labore officiis unde neque odio reiciendis.\n\nVeritatis animi nulla quia nam et consectetur. Sapiente aut animi praesentium ipsa quidem. Tenetur alias laudantium eum dolorum quia.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 890,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;(563) 877-7920&quot;,
            &quot;contact_email&quot;: &quot;sporer.lorenzo@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Chasity Gislason&quot;,
                &quot;email&quot;: &quot;haylee27@example.com&quot;,
                &quot;phone&quot;: &quot;240-536-1507&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:20.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 23,
            &quot;title&quot;: &quot;Toyota Camry 1997&quot;,
            &quot;price&quot;: &quot;42443.00&quot;,
            &quot;year&quot;: 2021,
            &quot;mileage&quot;: 148045,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;West Donnieburgh, Texas&quot;,
            &quot;description&quot;: &quot;Impedit ea et architecto fugiat cumque in nostrum. Commodi repellendus sint molestiae quis enim harum qui. Sit et reprehenderit aut magni perferendis. Quod sed quisquam at unde ut doloremque. Praesentium eligendi dolorem soluta eligendi et ex.\n\nNisi consequatur in excepturi rerum nam. Quaerat aut alias exercitationem fugit sunt ut voluptatem. Incidunt alias voluptatem dolores quis. Necessitatibus sit natus sed autem deserunt delectus.\n\nAb aut autem quisquam et nulla. Autem officiis asperiores quis distinctio omnis earum eum. Molestiae nam id doloremque placeat. Ut natus rerum amet aspernatur voluptate autem.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 119,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;1-501-692-1968&quot;,
            &quot;contact_email&quot;: &quot;ndeckow@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Mrs. Jacky Stoltenberg III&quot;,
                &quot;email&quot;: &quot;kblick@example.com&quot;,
                &quot;phone&quot;: &quot;(848) 881-0382&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:22.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 25,
            &quot;title&quot;: &quot;Nissan Altima 1993&quot;,
            &quot;price&quot;: &quot;20702.00&quot;,
            &quot;year&quot;: 2023,
            &quot;mileage&quot;: 197894,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Schowalterburgh, Indiana&quot;,
            &quot;description&quot;: &quot;Voluptate aut doloribus ut ut aut. Voluptatem omnis rerum illo neque molestias natus enim. Tempore deleniti vitae et est sed ab qui.\n\nDolor repudiandae quisquam et assumenda voluptas. Tempora officia magnam et fugit. Quos facere perferendis sapiente. Asperiores ab distinctio modi labore quod.\n\nHic esse exercitationem quibusdam iste tempore. Libero sequi qui dolorem mollitia libero quo omnis neque. Earum autem earum voluptas aut voluptatem vel. Et aut voluptatibus quas laboriosam placeat eos autem.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 781,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1.539.838.5202&quot;,
            &quot;contact_email&quot;: &quot;lavada.hessel@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Jeromy Schuster&quot;,
                &quot;email&quot;: &quot;brenda.mccullough@example.org&quot;,
                &quot;phone&quot;: &quot;+17659470506&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:22.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 27,
            &quot;title&quot;: &quot;Mazda 6 2014&quot;,
            &quot;price&quot;: &quot;65881.00&quot;,
            &quot;year&quot;: 2012,
            &quot;mileage&quot;: 49616,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;cvt&quot;,
            &quot;location&quot;: &quot;Port Deangeloside, Tennessee&quot;,
            &quot;description&quot;: &quot;Cumque nesciunt impedit molestiae enim atque similique vel aut. Praesentium omnis at autem ratione est minima molestiae. Eum ut ea veritatis qui laboriosam velit. Quaerat dolor eius aut dolores officia et.\n\nSed nesciunt sint nihil sequi. Perferendis reprehenderit tempore ullam sequi repellat placeat. Distinctio minima cupiditate quisquam commodi sint deserunt.\n\nVoluptatum mollitia in non quidem repellat voluptatem nam ratione. Quia aperiam labore dolorum officia et.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: true,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 913,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+19807750086&quot;,
            &quot;contact_email&quot;: &quot;dalton83@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Jeromy Schuster&quot;,
                &quot;email&quot;: &quot;brenda.mccullough@example.org&quot;,
                &quot;phone&quot;: &quot;+17659470506&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:22.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 29,
            &quot;title&quot;: &quot;Mercedes C-Class 2007&quot;,
            &quot;price&quot;: &quot;7586.00&quot;,
            &quot;year&quot;: 2014,
            &quot;mileage&quot;: 93964,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;cvt&quot;,
            &quot;location&quot;: &quot;East Guadalupe, Illinois&quot;,
            &quot;description&quot;: &quot;Corrupti pariatur laboriosam est aliquid corporis est consequuntur odio. Ipsam porro quidem laborum ex. Nam molestiae dicta molestiae. Delectus porro quia est rem cum vitae.\n\nAut sed vel voluptates reiciendis delectus sint itaque. Natus quam ut cum ad molestiae et. Doloribus error voluptatum excepturi necessitatibus. Est voluptatibus aperiam maiores expedita sit impedit.\n\nNecessitatibus sit eaque quia assumenda praesentium. Laboriosam sunt doloremque sit error neque aut omnis. Iste veniam quis enim et porro. Et est officia voluptatem quibusdam exercitationem. Ullam voluptas sed rerum itaque voluptas quasi aliquid et.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 884,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-404-415-0082&quot;,
            &quot;contact_email&quot;: &quot;nitzsche.herman@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Jeromy Schuster&quot;,
                &quot;email&quot;: &quot;brenda.mccullough@example.org&quot;,
                &quot;phone&quot;: &quot;+17659470506&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:22.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 30,
            &quot;title&quot;: &quot;Volkswagen Passat 2005&quot;,
            &quot;price&quot;: &quot;14248.00&quot;,
            &quot;year&quot;: 2017,
            &quot;mileage&quot;: 111334,
            &quot;fuel_type&quot;: &quot;electric&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Lake Emeliafurt, District of Columbia&quot;,
            &quot;description&quot;: &quot;Unde et et id possimus in ducimus. Placeat voluptatem repudiandae quibusdam commodi est. Eligendi animi voluptatem nam deleniti. A vitae explicabo a ut placeat suscipit. Quas libero aliquid eius.\n\nTenetur in accusantium voluptatum repudiandae nam aliquid aut. Eveniet optio ea asperiores eos. Id illum ullam deserunt voluptas dolores officia. Ipsam eos sequi ipsam totam tempora excepturi animi.\n\nDebitis tenetur nam eos reiciendis. Omnis dolorem deserunt sed velit cum tempora nostrum. Consequuntur sit doloribus praesentium laborum enim quasi voluptas.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 0,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;346-258-3892&quot;,
            &quot;contact_email&quot;: &quot;pacocha.laurie@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Mrs. Kelsie Koss&quot;,
                &quot;email&quot;: &quot;metz.oceane@example.com&quot;,
                &quot;phone&quot;: &quot;(667) 969-5235&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:23.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 34,
            &quot;title&quot;: &quot;BMW 3 Series 1977&quot;,
            &quot;price&quot;: &quot;26418.00&quot;,
            &quot;year&quot;: 2012,
            &quot;mileage&quot;: 190934,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;semi-automatic&quot;,
            &quot;location&quot;: &quot;Cassandremouth, Vermont&quot;,
            &quot;description&quot;: &quot;Assumenda dolorem blanditiis sint molestiae soluta et. Autem aut veniam ipsa itaque repellendus repudiandae sunt voluptatibus. Iure ut facilis non quis explicabo.\n\nCum vero sequi maiores corrupti. Dolor consequuntur dolor repellat et dolores explicabo. Aperiam et earum in voluptas impedit. Quaerat voluptate corporis itaque totam distinctio.\n\nSint voluptatem accusantium et enim. Voluptatum eos sunt voluptatibus ea dolores deleniti delectus.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 625,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1.725.859.8776&quot;,
            &quot;contact_email&quot;: &quot;wilma54@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 11,
                &quot;name&quot;: &quot;Prudence Purdy&quot;,
                &quot;email&quot;: &quot;eharber@example.com&quot;,
                &quot;phone&quot;: &quot;(580) 424-4916&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:23.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 42,
            &quot;title&quot;: &quot;Honda Accord 1975&quot;,
            &quot;price&quot;: &quot;57103.00&quot;,
            &quot;year&quot;: 2012,
            &quot;mileage&quot;: 46167,
            &quot;fuel_type&quot;: &quot;electric&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Linneaville, Arizona&quot;,
            &quot;description&quot;: &quot;Quia sint dolore cupiditate aut rerum. Impedit nihil nihil sed ipsum ipsam veritatis accusantium. Possimus aut rerum qui et qui consequatur sit.\n\nNulla eum laborum voluptas. Perspiciatis id enim autem deserunt. Ipsum aut similique odio dicta dolorem.\n\nConsequuntur atque perferendis rem alias dignissimos. Nobis cum modi eius autem corporis quam exercitationem. Sunt omnis hic quidem dolores. Autem accusantium fugit voluptas.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 794,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;458-871-6793&quot;,
            &quot;contact_email&quot;: &quot;dayton.bruen@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: &quot;test@example.com&quot;,
                &quot;phone&quot;: &quot;929.965.7005&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 43,
            &quot;title&quot;: &quot;Mercedes C-Class 2021&quot;,
            &quot;price&quot;: &quot;45608.00&quot;,
            &quot;year&quot;: 2017,
            &quot;mileage&quot;: 103139,
            &quot;fuel_type&quot;: &quot;lpg&quot;,
            &quot;transmission&quot;: &quot;manual&quot;,
            &quot;location&quot;: &quot;Abigailfurt, Washington&quot;,
            &quot;description&quot;: &quot;Suscipit nesciunt reiciendis magnam illum occaecati impedit recusandae. Quia explicabo consequuntur dolor velit aliquam ducimus. Aliquid ea dolor sint sed deleniti.\n\nCorrupti eligendi aliquid voluptas mollitia cumque quis deserunt. Illo omnis recusandae dolor exercitationem pariatur maiores et quia. Voluptatibus quo quia autem id.\n\nSed ut totam tenetur ipsa dolores aut consequuntur. Voluptates quos libero tempora quisquam mollitia sint.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: &quot;http://pollich.com/odio-ex-alias-aut-earum&quot;,
            &quot;views&quot;: 65,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1.360.723.2387&quot;,
            &quot;contact_email&quot;: &quot;cora70@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: &quot;test@example.com&quot;,
                &quot;phone&quot;: &quot;929.965.7005&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 44,
            &quot;title&quot;: &quot;Mazda 6 1980&quot;,
            &quot;price&quot;: &quot;67426.00&quot;,
            &quot;year&quot;: 2012,
            &quot;mileage&quot;: 70467,
            &quot;fuel_type&quot;: &quot;electric&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;Olsonborough, New Hampshire&quot;,
            &quot;description&quot;: &quot;Quis aperiam cupiditate neque hic blanditiis eum. Asperiores earum id quia ea.\n\nMollitia temporibus atque quod mollitia hic ea. Laborum dolorem tempora illum ab et. Doloremque rerum in aperiam error distinctio qui possimus. Sed doloribus blanditiis aspernatur excepturi quis.\n\nNatus atque qui facilis quam. Architecto voluptas architecto blanditiis omnis repellendus. Sit illo sed occaecati sint quidem.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 149,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-812-964-6279&quot;,
            &quot;contact_email&quot;: &quot;sconsidine@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: &quot;test@example.com&quot;,
                &quot;phone&quot;: &quot;929.965.7005&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        },
        {
            &quot;id&quot;: 45,
            &quot;title&quot;: &quot;Volkswagen Passat 2012&quot;,
            &quot;price&quot;: &quot;9681.00&quot;,
            &quot;year&quot;: 2022,
            &quot;mileage&quot;: 8901,
            &quot;fuel_type&quot;: &quot;diesel&quot;,
            &quot;transmission&quot;: &quot;automatic&quot;,
            &quot;location&quot;: &quot;North Rico, Kentucky&quot;,
            &quot;description&quot;: &quot;Aut ea corrupti laboriosam. Ducimus est vel labore dolorem et culpa neque aliquid. Qui omnis aut eum reprehenderit. Optio odio quisquam reiciendis ducimus.\n\nVoluptatum molestiae eum porro voluptates ad tempora. Culpa suscipit quaerat odio neque nam perferendis earum. Assumenda quia sit qui aut ut ut quia. Sed delectus animi incidunt sit.\n\nImpedit amet et rerum necessitatibus. Doloremque maxime optio et quisquam quo tenetur. Deserunt deleniti ullam illum atque facere ut. Molestias unde sapiente sit similique ipsum consectetur ab molestiae.&quot;,
            &quot;featured&quot;: true,
            &quot;has_360_view&quot;: false,
            &quot;video_url&quot;: null,
            &quot;views&quot;: 486,
            &quot;is_active&quot;: true,
            &quot;contact_phone&quot;: &quot;+1-216-455-6038&quot;,
            &quot;contact_email&quot;: &quot;nichole26@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
            &quot;seller&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Test User&quot;,
                &quot;email&quot;: &quot;test@example.com&quot;,
                &quot;phone&quot;: &quot;929.965.7005&quot;,
                &quot;avatar&quot;: null,
                &quot;email_verified_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;created_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-02T09:43:18.000000Z&quot;
            },
            &quot;images&quot;: [],
            &quot;favorites_count&quot;: 0,
            &quot;is_favorited&quot;: false,
            &quot;primary_image&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cars-featured" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cars-featured"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-featured"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cars-featured" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-featured">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cars-featured" data-method="GET"
      data-path="api/cars/featured"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-featured', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cars-featured"
                    onclick="tryItOut('GETapi-cars-featured');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cars-featured"
                    onclick="cancelTryOut('GETapi-cars-featured');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cars-featured"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cars/featured</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cars-featured"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cars-featured"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-cars--car_id-">Get single car details</h2>

<p>
</p>



<span id="example-requests-GETapi-cars--car_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/cars/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cars--car_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Hyundai Elantra 1981&quot;,
        &quot;price&quot;: &quot;23147.00&quot;,
        &quot;year&quot;: 2022,
        &quot;mileage&quot;: 91077,
        &quot;fuel_type&quot;: &quot;hybrid&quot;,
        &quot;transmission&quot;: &quot;automatic&quot;,
        &quot;location&quot;: &quot;North Billy, Connecticut&quot;,
        &quot;description&quot;: &quot;Fuga vitae quia voluptas eaque nesciunt. Officia voluptatum nisi nulla tempora eum nam vel ut. Qui asperiores et ut occaecati nobis id.\n\nEos aut molestias quod in animi. Maiores magni nostrum ratione enim. Molestiae perspiciatis dolores ex error impedit asperiores. Dolore est tempora quia magni.\n\nMinima beatae quod libero sed porro ratione maiores ullam. Qui ut nihil quis omnis non earum nihil. Consequuntur ratione id sed ab commodi dolore.&quot;,
        &quot;featured&quot;: false,
        &quot;has_360_view&quot;: false,
        &quot;video_url&quot;: null,
        &quot;views&quot;: 708,
        &quot;is_active&quot;: true,
        &quot;contact_phone&quot;: &quot;+1.618.684.8194&quot;,
        &quot;contact_email&quot;: &quot;watsica.michale@example.net&quot;,
        &quot;created_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-07-02T09:43:24.000000Z&quot;,
        &quot;seller&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Test User&quot;,
            &quot;email&quot;: null,
            &quot;phone&quot;: &quot;929.965.7005&quot;,
            &quot;avatar&quot;: null,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        &quot;images&quot;: [],
        &quot;specifications&quot;: {
            &quot;id&quot;: 1,
            &quot;engine&quot;: &quot;2.0L Turbo&quot;,
            &quot;power&quot;: &quot;220 HP&quot;,
            &quot;color&quot;: &quot;Silver&quot;,
            &quot;doors&quot;: 5,
            &quot;seats&quot;: 4,
            &quot;body_type&quot;: &quot;Sedan&quot;,
            &quot;drive_type&quot;: &quot;rwd&quot;
        },
        &quot;favorites_count&quot;: 0,
        &quot;is_favorited&quot;: false,
        &quot;primary_image&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cars--car_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cars--car_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars--car_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cars--car_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars--car_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cars--car_id-" data-method="GET"
      data-path="api/cars/{car_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cars--car_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cars--car_id-"
                    onclick="tryItOut('GETapi-cars--car_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cars--car_id-"
                    onclick="cancelTryOut('GETapi-cars--car_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cars--car_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cars/{car_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cars--car_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cars--car_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>car_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_id"                data-endpoint="GETapi-cars--car_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-cars-search">Search cars</h2>

<p>
</p>



<span id="example-requests-POSTapi-cars-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/cars/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"query\": \"b\",
    \"min_price\": 39,
    \"max_price\": 84,
    \"min_year\": 341,
    \"max_year\": 1403,
    \"fuel_type\": \"hybrid\",
    \"transmission\": \"automatic\",
    \"location\": \"i\",
    \"sort_by\": \"created_at_desc\",
    \"per_page\": 8,
    \"page\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "query": "b",
    "min_price": 39,
    "max_price": 84,
    "min_year": 341,
    "max_year": 1403,
    "fuel_type": "hybrid",
    "transmission": "automatic",
    "location": "i",
    "sort_by": "created_at_desc",
    "per_page": 8,
    "page": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cars-search">
</span>
<span id="execution-results-POSTapi-cars-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cars-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cars-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-cars-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cars-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-cars-search" data-method="POST"
      data-path="api/cars/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cars-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cars-search"
                    onclick="tryItOut('POSTapi-cars-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cars-search"
                    onclick="cancelTryOut('POSTapi-cars-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cars-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cars/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-cars-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-cars-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>query</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="query"                data-endpoint="POSTapi-cars-search"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>min_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="min_price"                data-endpoint="POSTapi-cars-search"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_price"                data-endpoint="POSTapi-cars-search"
               value="84"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>84</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>min_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="min_year"                data-endpoint="POSTapi-cars-search"
               value="341"
               data-component="body">
    <br>
<p>Must be at least 1950. Example: <code>341</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_year"                data-endpoint="POSTapi-cars-search"
               value="1403"
               data-component="body">
    <br>
<p>Must be at least 1950. Example: <code>1403</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fuel_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fuel_type"                data-endpoint="POSTapi-cars-search"
               value="hybrid"
               data-component="body">
    <br>
<p>Example: <code>hybrid</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>gasoline</code></li> <li><code>diesel</code></li> <li><code>electric</code></li> <li><code>hybrid</code></li> <li><code>lpg</code></li> <li><code>all</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transmission</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="transmission"                data-endpoint="POSTapi-cars-search"
               value="automatic"
               data-component="body">
    <br>
<p>Example: <code>automatic</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>manual</code></li> <li><code>automatic</code></li> <li><code>cvt</code></li> <li><code>semi-automatic</code></li> <li><code>all</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-cars-search"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sort_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort_by"                data-endpoint="POSTapi-cars-search"
               value="created_at_desc"
               data-component="body">
    <br>
<p>Example: <code>created_at_desc</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>price_asc</code></li> <li><code>price_desc</code></li> <li><code>year_asc</code></li> <li><code>year_desc</code></li> <li><code>mileage_asc</code></li> <li><code>mileage_desc</code></li> <li><code>created_at_desc</code></li> <li><code>created_at_asc</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>per_page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="per_page"                data-endpoint="POSTapi-cars-search"
               value="8"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 50. Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="page"                data-endpoint="POSTapi-cars-search"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-auth-user">Get authenticated user</h2>

<p>
</p>



<span id="example-requests-GETapi-auth-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/auth/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-user">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-user" data-method="GET"
      data-path="api/auth/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-user"
                    onclick="tryItOut('GETapi-auth-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-user"
                    onclick="cancelTryOut('GETapi-auth-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-auth-logout">Logout user</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/auth/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
</span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-auth-logout-all">Logout from all devices</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-logout-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/auth/logout-all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/logout-all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout-all">
</span>
<span id="execution-results-POSTapi-auth-logout-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout-all"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout-all">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-logout-all" data-method="POST"
      data-path="api/auth/logout-all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout-all"
                    onclick="tryItOut('POSTapi-auth-logout-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout-all"
                    onclick="cancelTryOut('POSTapi-auth-logout-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout-all"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout-all</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-logout-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-logout-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-auth-avatar">Upload user avatar</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-avatar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/auth/avatar" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "avatar=@C:\Users\xifi3\AppData\Local\Temp\phpD98.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/avatar"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('avatar', document.querySelector('input[name="avatar"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-avatar">
</span>
<span id="execution-results-POSTapi-auth-avatar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-avatar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-avatar"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-avatar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-avatar">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-avatar" data-method="POST"
      data-path="api/auth/avatar"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-avatar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-avatar"
                    onclick="tryItOut('POSTapi-auth-avatar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-avatar"
                    onclick="cancelTryOut('POSTapi-auth-avatar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-avatar"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/avatar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-avatar"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-avatar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avatar</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="avatar"                data-endpoint="POSTapi-auth-avatar"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\xifi3\AppData\Local\Temp\phpD98.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-auth-stats">Get user statistics</h2>

<p>
</p>



<span id="example-requests-GETapi-auth-stats">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/auth/stats" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/auth/stats"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-stats">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-stats" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-stats"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-stats"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-stats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-stats">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-stats" data-method="GET"
      data-path="api/auth/stats"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-stats', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-stats"
                    onclick="tryItOut('GETapi-auth-stats');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-stats"
                    onclick="cancelTryOut('GETapi-auth-stats');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-stats"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/stats</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-cars">Store a new car listing</h2>

<p>
</p>



<span id="example-requests-POSTapi-cars">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/cars" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs"\
    --form "price=12"\
    --form "year=23"\
    --form "mileage=25"\
    --form "fuel_type=lpg"\
    --form "transmission=automatic"\
    --form "location=t"\
    --form "description=Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio."\
    --form "specifications[engine]=b"\
    --form "specifications[power]=n"\
    --form "specifications[color]=g"\
    --form "specifications[doors]=1"\
    --form "specifications[seats]=9"\
    --form "specifications[body_type]=i"\
    --form "specifications[drive_type]=rwd"\
    --form "video_url=http://www.okon.com/accusantium-harum-mollitia-modi-deserunt-aut-ab"\
    --form "contact_phone=ykcmyuwpwlvqwrsi"\
    --form "contact_email=pfritsch@example.com"\
    --form "images[]=@C:\Users\xifi3\AppData\Local\Temp\php1192.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs');
body.append('price', '12');
body.append('year', '23');
body.append('mileage', '25');
body.append('fuel_type', 'lpg');
body.append('transmission', 'automatic');
body.append('location', 't');
body.append('description', 'Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio.');
body.append('specifications[engine]', 'b');
body.append('specifications[power]', 'n');
body.append('specifications[color]', 'g');
body.append('specifications[doors]', '1');
body.append('specifications[seats]', '9');
body.append('specifications[body_type]', 'i');
body.append('specifications[drive_type]', 'rwd');
body.append('video_url', 'http://www.okon.com/accusantium-harum-mollitia-modi-deserunt-aut-ab');
body.append('contact_phone', 'ykcmyuwpwlvqwrsi');
body.append('contact_email', 'pfritsch@example.com');
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cars">
</span>
<span id="execution-results-POSTapi-cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-cars" data-method="POST"
      data-path="api/cars"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cars"
                    onclick="tryItOut('POSTapi-cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cars"
                    onclick="cancelTryOut('POSTapi-cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-cars"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-cars"
               value="bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Must be at least 10 characters. Example: <code>bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-cars"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 100. Must not be greater than 999999999. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-cars"
               value="23"
               data-component="body">
    <br>
<p>Must be at least 1950. Must not be greater than 2026. Example: <code>23</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mileage</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="mileage"                data-endpoint="POSTapi-cars"
               value="25"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 999999. Example: <code>25</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fuel_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fuel_type"                data-endpoint="POSTapi-cars"
               value="lpg"
               data-component="body">
    <br>
<p>Example: <code>lpg</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>gasoline</code></li> <li><code>diesel</code></li> <li><code>electric</code></li> <li><code>hybrid</code></li> <li><code>lpg</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transmission</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transmission"                data-endpoint="POSTapi-cars"
               value="automatic"
               data-component="body">
    <br>
<p>Example: <code>automatic</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>manual</code></li> <li><code>automatic</code></li> <li><code>cvt</code></li> <li><code>semi-automatic</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-cars"
               value="t"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>t</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-cars"
               value="Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio."
               data-component="body">
    <br>
<p>Must be at least 50 characters. Must not be greater than 2000 characters. Example: <code>Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="images[0]"                data-endpoint="POSTapi-cars"
               data-component="body">
        <input type="file" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-cars"
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 5120 kilobytes.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>specifications</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>engine</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="specifications.engine"                data-endpoint="POSTapi-cars"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>b</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>power</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="specifications.power"                data-endpoint="POSTapi-cars"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="specifications.color"                data-endpoint="POSTapi-cars"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>g</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>doors</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="specifications.doors"                data-endpoint="POSTapi-cars"
               value="1"
               data-component="body">
    <br>
<p>Must be at least 2. Must not be greater than 5. Example: <code>1</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>seats</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="specifications.seats"                data-endpoint="POSTapi-cars"
               value="9"
               data-component="body">
    <br>
<p>Must be at least 2. Must not be greater than 9. Example: <code>9</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>body_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="specifications.body_type"                data-endpoint="POSTapi-cars"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>i</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>drive_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="specifications.drive_type"                data-endpoint="POSTapi-cars"
               value="rwd"
               data-component="body">
    <br>
<p>Example: <code>rwd</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>fwd</code></li> <li><code>rwd</code></li> <li><code>awd</code></li> <li><code>4wd</code></li></ul>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>video_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="video_url"                data-endpoint="POSTapi-cars"
               value="http://www.okon.com/accusantium-harum-mollitia-modi-deserunt-aut-ab"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://www.okon.com/accusantium-harum-mollitia-modi-deserunt-aut-ab</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="contact_phone"                data-endpoint="POSTapi-cars"
               value="ykcmyuwpwlvqwrsi"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ykcmyuwpwlvqwrsi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="contact_email"                data-endpoint="POSTapi-cars"
               value="pfritsch@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>pfritsch@example.com</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-cars--car_id-">Update car listing</h2>

<p>
</p>



<span id="example-requests-PUTapi-cars--car_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://127.0.0.1:8000/api/cars/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs\",
    \"price\": 12,
    \"year\": 23,
    \"mileage\": 25,
    \"fuel_type\": \"diesel\",
    \"transmission\": \"manual\",
    \"location\": \"t\",
    \"description\": \"Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio.\",
    \"contact_phone\": \"qppwqbewtnnoqitp\",
    \"contact_email\": \"ashtyn.oconnell@example.com\",
    \"video_url\": \"https:\\/\\/www.pagac.net\\/qui-repudiandae-laboriosam-est-alias\",
    \"is_active\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs",
    "price": 12,
    "year": 23,
    "mileage": 25,
    "fuel_type": "diesel",
    "transmission": "manual",
    "location": "t",
    "description": "Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio.",
    "contact_phone": "qppwqbewtnnoqitp",
    "contact_email": "ashtyn.oconnell@example.com",
    "video_url": "https:\/\/www.pagac.net\/qui-repudiandae-laboriosam-est-alias",
    "is_active": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-cars--car_id-">
</span>
<span id="execution-results-PUTapi-cars--car_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-cars--car_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cars--car_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-cars--car_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cars--car_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-cars--car_id-" data-method="PUT"
      data-path="api/cars/{car_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-cars--car_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-cars--car_id-"
                    onclick="tryItOut('PUTapi-cars--car_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-cars--car_id-"
                    onclick="cancelTryOut('PUTapi-cars--car_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-cars--car_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/cars/{car_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-cars--car_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-cars--car_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>car_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_id"                data-endpoint="PUTapi-cars--car_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-cars--car_id-"
               value="bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Must be at least 10 characters. Example: <code>bngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzs</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="PUTapi-cars--car_id-"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 100. Must not be greater than 999999999. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="PUTapi-cars--car_id-"
               value="23"
               data-component="body">
    <br>
<p>Must be at least 1950. Must not be greater than 2026. Example: <code>23</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mileage</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="mileage"                data-endpoint="PUTapi-cars--car_id-"
               value="25"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 999999. Example: <code>25</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fuel_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fuel_type"                data-endpoint="PUTapi-cars--car_id-"
               value="diesel"
               data-component="body">
    <br>
<p>Example: <code>diesel</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>gasoline</code></li> <li><code>diesel</code></li> <li><code>electric</code></li> <li><code>hybrid</code></li> <li><code>lpg</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transmission</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="transmission"                data-endpoint="PUTapi-cars--car_id-"
               value="manual"
               data-component="body">
    <br>
<p>Example: <code>manual</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>manual</code></li> <li><code>automatic</code></li> <li><code>cvt</code></li> <li><code>semi-automatic</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="PUTapi-cars--car_id-"
               value="t"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>t</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-cars--car_id-"
               value="Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio."
               data-component="body">
    <br>
<p>Must be at least 50 characters. Must not be greater than 2000 characters. Example: <code>Laboriosam praesentium quis adipisci molestias fugit deleniti distinctio.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="contact_phone"                data-endpoint="PUTapi-cars--car_id-"
               value="qppwqbewtnnoqitp"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>qppwqbewtnnoqitp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="contact_email"                data-endpoint="PUTapi-cars--car_id-"
               value="ashtyn.oconnell@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>ashtyn.oconnell@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>video_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="video_url"                data-endpoint="PUTapi-cars--car_id-"
               value="https://www.pagac.net/qui-repudiandae-laboriosam-est-alias"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.pagac.net/qui-repudiandae-laboriosam-est-alias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-cars--car_id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-cars--car_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-cars--car_id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-cars--car_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-cars--car_id-">Delete car listing</h2>

<p>
</p>



<span id="example-requests-DELETEapi-cars--car_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://127.0.0.1:8000/api/cars/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-cars--car_id-">
</span>
<span id="execution-results-DELETEapi-cars--car_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-cars--car_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cars--car_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-cars--car_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cars--car_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-cars--car_id-" data-method="DELETE"
      data-path="api/cars/{car_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cars--car_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-cars--car_id-"
                    onclick="tryItOut('DELETEapi-cars--car_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-cars--car_id-"
                    onclick="cancelTryOut('DELETEapi-cars--car_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-cars--car_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/cars/{car_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-cars--car_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-cars--car_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>car_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_id"                data-endpoint="DELETEapi-cars--car_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-cars--car_id--favorite">Toggle favorite status</h2>

<p>
</p>



<span id="example-requests-POSTapi-cars--car_id--favorite">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/cars/1/favorite" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/cars/1/favorite"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cars--car_id--favorite">
</span>
<span id="execution-results-POSTapi-cars--car_id--favorite" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cars--car_id--favorite"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cars--car_id--favorite"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-cars--car_id--favorite" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cars--car_id--favorite">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-cars--car_id--favorite" data-method="POST"
      data-path="api/cars/{car_id}/favorite"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cars--car_id--favorite', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cars--car_id--favorite"
                    onclick="tryItOut('POSTapi-cars--car_id--favorite');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cars--car_id--favorite"
                    onclick="cancelTryOut('POSTapi-cars--car_id--favorite');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cars--car_id--favorite"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cars/{car_id}/favorite</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-cars--car_id--favorite"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-cars--car_id--favorite"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>car_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_id"                data-endpoint="POSTapi-cars--car_id--favorite"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-user-cars">Get user&#039;s car listings</h2>

<p>
</p>



<span id="example-requests-GETapi-user-cars">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/user/cars" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/user/cars"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user-cars">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user-cars" data-method="GET"
      data-path="api/user/cars"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-cars"
                    onclick="tryItOut('GETapi-user-cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-cars"
                    onclick="cancelTryOut('GETapi-user-cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user-favorites">Get user&#039;s favorite cars</h2>

<p>
</p>



<span id="example-requests-GETapi-user-favorites">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/user/favorites" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/user/favorites"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user-favorites">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-favorites" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-favorites"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-favorites"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user-favorites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-favorites">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user-favorites" data-method="GET"
      data-path="api/user/favorites"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-favorites', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-favorites"
                    onclick="tryItOut('GETapi-user-favorites');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-favorites"
                    onclick="cancelTryOut('GETapi-user-favorites');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-favorites"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/favorites</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
