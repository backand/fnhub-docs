
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Documentation</title>

    <style>
      .highlight table td { padding: 5px; }
.highlight table pre { margin: 0; }
.highlight .gh {
  color: #999999;
}
.highlight .sr {
  color: #f6aa11;
}
.highlight .go {
  color: #888888;
}
.highlight .gp {
  color: #555555;
}
.highlight .gs {
}
.highlight .gu {
  color: #aaaaaa;
}
.highlight .nb {
  color: #f6aa11;
}
.highlight .cm {
  color: #75715e;
}
.highlight .cp {
  color: #75715e;
}
.highlight .c1 {
  color: #75715e;
}
.highlight .cs {
  color: #75715e;
}
.highlight .c, .highlight .cd {
  color: #75715e;
}
.highlight .err {
  color: #960050;
}
.highlight .gr {
  color: #960050;
}
.highlight .gt {
  color: #960050;
}
.highlight .gd {
  color: #49483e;
}
.highlight .gi {
  color: #49483e;
}
.highlight .ge {
  color: #49483e;
}
.highlight .kc {
  color: #66d9ef;
}
.highlight .kd {
  color: #66d9ef;
}
.highlight .kr {
  color: #66d9ef;
}
.highlight .no {
  color: #66d9ef;
}
.highlight .kt {
  color: #66d9ef;
}
.highlight .mf {
  color: #ae81ff;
}
.highlight .mh {
  color: #ae81ff;
}
.highlight .il {
  color: #ae81ff;
}
.highlight .mi {
  color: #ae81ff;
}
.highlight .mo {
  color: #ae81ff;
}
.highlight .m, .highlight .mb, .highlight .mx {
  color: #ae81ff;
}
.highlight .sc {
  color: #ae81ff;
}
.highlight .se {
  color: #ae81ff;
}
.highlight .ss {
  color: #ae81ff;
}
.highlight .sd {
  color: #e6db74;
}
.highlight .s2 {
  color: #e6db74;
}
.highlight .sb {
  color: #e6db74;
}
.highlight .sh {
  color: #e6db74;
}
.highlight .si {
  color: #e6db74;
}
.highlight .sx {
  color: #e6db74;
}
.highlight .s1 {
  color: #e6db74;
}
.highlight .s {
  color: #e6db74;
}
.highlight .na {
  color: #a6e22e;
}
.highlight .nc {
  color: #a6e22e;
}
.highlight .nd {
  color: #a6e22e;
}
.highlight .ne {
  color: #a6e22e;
}
.highlight .nf {
  color: #a6e22e;
}
.highlight .vc {
  color: #ffffff;
}
.highlight .nn {
  color: #ffffff;
}
.highlight .nl {
  color: #ffffff;
}
.highlight .ni {
  color: #ffffff;
}
.highlight .bp {
  color: #ffffff;
}
.highlight .vg {
  color: #ffffff;
}
.highlight .vi {
  color: #ffffff;
}
.highlight .nv {
  color: #ffffff;
}
.highlight .w {
  color: #ffffff;
}
.highlight {
  color: #ffffff;
}
.highlight .n, .highlight .py, .highlight .nx {
  color: #ffffff;
}
.highlight .ow {
  color: #f92672;
}
.highlight .nt {
  color: #f92672;
}
.highlight .k, .highlight .kv {
  color: #f92672;
}
.highlight .kn {
  color: #f92672;
}
.highlight .kp {
  color: #f92672;
}
.highlight .o {
  color: #f92672;
}
    </style>
    <link href="/stylesheets/screen.css" rel="stylesheet" media="screen" />
    <link href="/stylesheets/print.css" rel="stylesheet" media="print" />
      <script src="/javascripts/all_nosearch.js"></script>
  </head>

  <body class="pages pages_platform_specific" data-languages="[]">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/images/navbar.png" alt="Navbar" />
      </span>
    </a>
    <div class="toc-wrapper">
      <img src="/images/logo.png" class="logo" alt="Logo" />
      <div id="toc" class="toc-list-h1">
          <li>
            <a href="#platform-specific-sdks" class="toc-h1 toc-link" data-title="Platform-specific SDKs">Platform-specific SDKs</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#angular-ionic-1-sdk" class="toc-h2 toc-link" data-title="Platform-specific SDKs">Angular - Ionic 1 SDK</a>
                      <ul class="toc-list-h3">
                          <li>
                            <a href="#overview" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Overview</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#installation" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Installation</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#import" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Import</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#quick-start" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Quick start</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#examples-for-angular-ionic-1" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Examples for Angular/Ionic 1</a>
                            <!-- Nest 4 levels -->
                          </li>
                      </ul>
                  </li>
                  <li>
                    <a href="#angular-ionic-2-sdk" class="toc-h2 toc-link" data-title="Platform-specific SDKs">Angular - Ionic 2 SDK</a>
                      <ul class="toc-list-h3">
                          <li>
                            <a href="#overview-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Overview</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#installation-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Installation</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#import-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Import</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#quick-start-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Quick start</a>
                            <!-- Nest 4 levels -->
                              <ul class="toc-list-h4">
                                  <li>
                                    <a href="#app-module-ts" class="toc-h4 toc-link" data-title="Platform-specific SDKs">app.module.ts:</a>
                                    <!-- Nest 5 levels -->
                                  </li>
                                  <li>
                                    <a href="#app-component-ts" class="toc-h4 toc-link" data-title="Platform-specific SDKs">app.component.ts:</a>
                                    <!-- Nest 5 levels -->
                                  </li>
                              </ul>
                          </li>
                          <li>
                            <a href="#examples-for-angular-ionic-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Examples for Angular/Ionic 2</a>
                            <!-- Nest 4 levels -->
                          </li>
                      </ul>
                  </li>
                  <li>
                    <a href="#redux-react-sdk" class="toc-h2 toc-link" data-title="Platform-specific SDKs">Redux - React SDK</a>
                      <ul class="toc-list-h3">
                          <li>
                            <a href="#overview-3" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Overview</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#installation-3" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Installation</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#import-3" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Import</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#quick-start-3" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Quick start</a>
                            <!-- Nest 4 levels -->
                              <ul class="toc-list-h4">
                                  <li>
                                    <a href="#a-href-https-github-com-gaearon-redux-thunk-redux-thunk-a" class="toc-h4 toc-link" data-title="Platform-specific SDKs"><a href="https://github.com/gaearon/redux-thunk">redux-thunk</a></a>
                                    <!-- Nest 5 levels -->
                                  </li>
                                  <li>
                                    <a href="#a-href-https-github-com-redux-saga-redux-saga-redux-saga-a" class="toc-h4 toc-link" data-title="Platform-specific SDKs"><a href="https://github.com/redux-saga/redux-saga">redux-saga</a></a>
                                    <!-- Nest 5 levels -->
                                  </li>
                                  <li>
                                    <a href="#working-with-the-sdk" class="toc-h4 toc-link" data-title="Platform-specific SDKs">Working with the SDK</a>
                                    <!-- Nest 5 levels -->
                                  </li>
                              </ul>
                          </li>
                          <li>
                            <a href="#examples-for-react-redux" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Examples for React/Redux</a>
                            <!-- Nest 4 levels -->
                          </li>
                      </ul>
                  </li>
                  <li>
                    <a href="#vue-js" class="toc-h2 toc-link" data-title="Platform-specific SDKs">Vue.js</a>
                      <ul class="toc-list-h3">
                          <li>
                            <a href="#including-and-initializing-the-sdk" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Including and Initializing the SDK</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#loading-the-object-data" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Loading the object data</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#creating-editing-and-deleting-objects" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Creating, Editing, and Deleting Objects</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#keeping-the-app-up-to-date" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Keeping the app up-to-date</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#conclusion" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Conclusion</a>
                            <!-- Nest 4 levels -->
                          </li>
                      </ul>
                  </li>
                  <li>
                    <a href="#jquery" class="toc-h2 toc-link" data-title="Platform-specific SDKs">jQuery</a>
                      <ul class="toc-list-h3">
                          <li>
                            <a href="#including-and-initializing-the-sdk-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Including and Initializing the SDK</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#creating-the-service" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Creating the Service</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#fetching-and-manipulating-the-data" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Fetching and Manipulating the Data</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#handling-responses" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Handling Responses</a>
                            <!-- Nest 4 levels -->
                          </li>
                          <li>
                            <a href="#conclusion-2" class="toc-h3 toc-link" data-title="Platform-specific SDKs">Conclusion</a>
                            <!-- Nest 4 levels -->
                          </li>
                      </ul>
                  </li>
              </ul>
          </li>
      </div>
    </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
        <h1 id='platform-specific-sdks'>Platform-specific SDKs</h1>
<p>This section covers our platform-specific SDKs. These SDKs are optimized for the named platform, and wrap the <a href="#vanilla-sdk">Vanilla SDK</a> to provide access to Backand.</p>
<h2 id='angular-ionic-1-sdk'>Angular - Ionic 1 SDK</h2><h3 id='overview'>Overview</h3>
<p>This SDK enables you to communicate comfortably and quickly with your Backand app using AngularJS and Ionic Framework. It wraps the <a href="https://github.com/backand/vanilla-sdk">vanilla-sdk</a> to allow you to work with Back&amp; more easily when working on projects based on Angular.js 1.</p>
<h3 id='installation'>Installation</h3>
<p>To install the Angular 1 SDK, use the correct command for your dependency management platform:</p>

<table><thead>
<tr>
<th>Provider</th>
<th>Command</th>
</tr>
</thead><tbody>
<tr>
<td>npm</td>
<td>$ npm i -S @backand/angular1-sdk</td>
</tr>
<tr>
<td>yarn</td>
<td>$ yarn add @backand/angular1-sdk</td>
</tr>
<tr>
<td>bower</td>
<td>$ bower install backand-angular1-sdk</td>
</tr>
<tr>
<td>clone/download via Git</td>
<td>$ git clone https://github.com/backand/angular1-sdk.git</td>
</tr>
</tbody></table>
<h3 id='import'>Import</h3><pre class="highlight html tab-html"><code><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"node_modules/@backand/angular1-sdk/backand.provider.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"backand.provider.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre>
<p>Include the following tags in your <em>index.html</em> file to start working with the SDK:</p>
<h3 id='quick-start'>Quick start</h3><pre class="highlight javascript tab-javascript"><code><span class="nx">angular</span>
  <span class="p">.</span><span class="nx">module</span><span class="p">(</span><span class="s1">'myApp'</span><span class="p">,</span> <span class="p">[</span><span class="s1">'backand'</span><span class="p">])</span>
  <span class="p">.</span><span class="nx">config</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">BackandProvider</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">BackandProvider</span><span class="p">.</span><span class="nx">init</span><span class="p">({</span>
      <span class="na">appName</span><span class="p">:</span> <span class="s1">'APP_NAME'</span><span class="p">,</span>
      <span class="na">anonymousToken</span><span class="p">:</span> <span class="s1">'ANONYMOUS_TOKEN'</span>
    <span class="p">});</span>
  <span class="p">})</span>
  <span class="p">.</span><span class="nx">controller</span><span class="p">(</span><span class="s1">'myAppCtrl'</span><span class="p">,</span> <span class="p">[</span><span class="s1">'$scope'</span><span class="p">,</span> <span class="s1">'$http'</span><span class="p">,</span> <span class="s1">'Backand'</span><span class="p">,</span> <span class="kd">function</span> <span class="nx">myAppCtrl</span><span class="p">()</span> <span class="p">{</span>

  <span class="p">}]);</span>
</code></pre>
<p>Getting started with the SDK is as simple as configuring access to a Back&amp; application, then calling <em>getList</em> on a relevant object.</p>

<p>Review the full API reference for our <a href="#vanilla-sdk">Vanilla SDK</a> to get started with your back end!</p>
<h3 id='examples-for-angular-ionic-1'>Examples for Angular/Ionic 1</h3>
<p><strong><em>To view a demo of the SDK in action, just run npm start - <a href="https://github.com/backand/angular1-sdk/blob/master/example/">example page</a>.</em></strong></p>
<h2 id='angular-ionic-2-sdk'>Angular - Ionic 2 SDK</h2><h3 id='overview-2'>Overview</h3>
<p>This SDK enables you to communicate comfortably and quickly with your Backand app using Angular 2 and the Ionic Framework version 2. It wraps the <a href="https://github.com/backand/vanilla-sdk">vanilla-sdk</a> to allow you to work with Back&amp; more easily when working on projects based on Angular.js.</p>
<h3 id='installation-2'>Installation</h3>
<p>To install the Angular 2 SDK, use the correct command for your dependency management platform:</p>

<table><thead>
<tr>
<th>Provider</th>
<th>Command</th>
</tr>
</thead><tbody>
<tr>
<td>npm</td>
<td>$ npm i -S @backand/angular2-sdk</td>
</tr>
<tr>
<td>yarn</td>
<td>$ yarn add @backand/angular2-sdk</td>
</tr>
</tbody></table>
<h3 id='import-2'>Import</h3>
<p>Use the following import statement to include the Angular2 SDK in your project:</p>
<pre class="highlight javascript tab-javascript"><code><span class="kr">import</span> <span class="p">{</span> <span class="nx">BackandService</span> <span class="p">}</span> <span class="nx">from</span> <span class="s1">'@backand/angular2-sdk'</span>
</code></pre><h3 id='quick-start-2'>Quick start</h3>
<p>Using the Back&amp; Angular2 SDK requires two steps - configuring access to the BackandService provider, and then actually calling the provider using the <a href="https://github.com/backand/vanilla-sdk">vanilla-sdk</a> methods.</p>
<h4 id='app-module-ts'>app.module.ts:</h4><pre class="highlight javascript tab-javascript"><code><span class="p">@</span><span class="nd">NgModule</span><span class="p">({</span>
  <span class="na">imports</span><span class="p">:</span> <span class="p">[</span> <span class="p">...</span> <span class="p">],</span>
  <span class="na">declarations</span><span class="p">:</span> <span class="p">[</span> <span class="p">...</span> <span class="p">],</span>
  <span class="na">providers</span><span class="p">:</span> <span class="p">[</span> <span class="nx">BackandService</span> <span class="p">],</span>
  <span class="na">bootstrap</span><span class="p">:</span> <span class="p">[</span> <span class="nx">AppComponent</span> <span class="p">]</span>
<span class="p">})</span>
<span class="kr">export</span> <span class="kr">class</span> <span class="nx">AppModule</span> <span class="p">{</span> <span class="p">}</span>
</code></pre>
<p>Update <em>app.module.ts</em> to include the BackandService as a provider</p>
<h4 id='app-component-ts'>app.component.ts:</h4><pre class="highlight javascript tab-javascript"><code><span class="p">@</span><span class="nd">Component</span><span class="p">({</span>
  <span class="na">selector</span><span class="p">:</span> <span class="s1">'my-app'</span><span class="p">,</span>
  <span class="na">template</span><span class="p">:</span> <span class="s2">`&lt;h1&gt;Hello angular2-sdk&lt;/h1&gt;
    &lt;h3&gt;{{res}}&lt;/h3&gt;`</span>
<span class="p">})</span>
<span class="kr">export</span> <span class="kr">class</span> <span class="nx">AppComponent</span> <span class="kr">implements</span> <span class="nx">OnInit</span> <span class="p">{</span>
  <span class="nl">res</span><span class="p">:</span> <span class="nx">string</span><span class="p">;</span>
  <span class="nx">constructor</span><span class="p">(</span><span class="kr">private</span> <span class="nx">backand</span><span class="p">:</span> <span class="nx">BackandService</span><span class="p">)</span> <span class="p">{</span> <span class="p">}</span>
  <span class="nx">getList</span><span class="p">():</span> <span class="k">void</span> <span class="p">{</span>
    <span class="k">this</span><span class="p">.</span><span class="nx">res</span> <span class="o">=</span> <span class="s1">'fetching objects...'</span><span class="p">;</span>
    <span class="k">this</span><span class="p">.</span><span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">getList</span><span class="p">(</span><span class="s1">'users'</span><span class="p">).</span><span class="nx">then</span><span class="p">((</span><span class="na">res</span><span class="p">:</span> <span class="nx">any</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">this</span><span class="p">.</span><span class="nx">res</span> <span class="o">=</span> <span class="s2">`</span><span class="p">${</span><span class="nx">res</span><span class="p">.</span><span class="nx">data</span><span class="p">.</span><span class="nx">length</span><span class="p">}</span><span class="s2"> objects fetched`</span><span class="p">;</span>
      <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">res</span><span class="p">);</span>
    <span class="p">})</span>
  <span class="p">}</span>
  <span class="nx">ngOnInit</span><span class="p">():</span> <span class="k">void</span> <span class="p">{</span>
    <span class="k">this</span><span class="p">.</span><span class="nx">backand</span><span class="p">.</span><span class="nx">init</span><span class="p">({</span>
      <span class="na">appName</span><span class="p">:</span> <span class="s1">'APP_NAME'</span><span class="p">,</span>
      <span class="na">anonymousToken</span><span class="p">:</span> <span class="s1">'ANONYMOUS_TOKEN'</span>
    <span class="p">});</span>
    <span class="k">this</span><span class="p">.</span><span class="nx">getList</span><span class="p">();</span>
 <span class="p">}</span>
<span class="p">}</span>
</code></pre>
<p>Now, call the SDK from <em>app.component.ts</em>. The SDK is initialized during <em>ngOnInit()</em>, and <em>getList</em> is called as a property on <em>AppComponent</em></p>

<p>Review the full API reference for our <a href="#vanilla-sdk">Vanilla SDK</a> to get started with your back end!</p>
<h3 id='examples-for-angular-ionic-2'>Examples for Angular/Ionic 2</h3>
<p><strong><em>To view a demo of the SDK in action, just run npm start - <a href="https://github.com/backand/angular2-sdk/blob/master/example/">example page</a>.</em></strong></p>

<p><strong><em>We also offer an example app for Angular 2 - just follow the instructions in our <a href="https://github.com/backand/angular2-example">sample project</a></em></strong></p>
<h2 id='redux-react-sdk'>Redux - React SDK</h2><h3 id='overview-3'>Overview</h3>
<p>This SDK enables you to communicate comfortably and quickly with your Backand app when building on top of React or Redux. It wraps the <a href="https://github.com/backand/vanilla-sdk">vanilla-sdk</a> to allow you to work with Back&amp; more easily when working on projects based on Redux.</p>
<h3 id='installation-3'>Installation</h3>
<p>To install the Redux SDK, use the correct command for your dependency management platform:</p>

<table><thead>
<tr>
<th>Provider</th>
<th>Command</th>
</tr>
</thead><tbody>
<tr>
<td>npm</td>
<td>$ npm i -S @backand/redux-sdk</td>
</tr>
<tr>
<td>yarn</td>
<td>$ yarn add @backand/redux-sdk</td>
</tr>
</tbody></table>
<h3 id='import-3'>Import</h3><pre class="highlight javascript tab-javascript"><code><span class="kr">import</span> <span class="p">{</span> <span class="nx">BackandService</span> <span class="p">}</span> <span class="nx">from</span> <span class="s1">'@backand/angular2-sdk'</span>
</code></pre>
<p>Use the following import statement to include the Angular2 SDK in your project:</p>
<h3 id='quick-start-3'>Quick start</h3><pre class="highlight shell"><code><span class="gp">$ </span><span class="s2">"./node_modules/.bin/bkndredux"</span> --help
<span class="gp">$ </span><span class="s2">"./node_modules/.bin/bkndredux"</span> user obj1 obj2 obj3... -m <span class="o">(</span>thunk/saga<span class="o">)</span>
</code></pre>
<p>To get started, first use <em>bkdnredux</em> to generate the necessary <em>Types</em>, <em>Actions</em>, and <em>Reducers</em> for your Backand objects from the command line:</p>

<p><strong><em>Note:</em></strong> <em>user</em> is a unique object. It has a different <em>Reducer</em> and <em>Type</em>, and it reveals most of the authentication <em>Actions</em> (getUserDetails, signin, signout, etc.).</p>
<pre class="highlight javascript tab-javascript"><code><span class="kr">import</span> <span class="p">{</span> <span class="nx">combineReducers</span> <span class="p">}</span> <span class="nx">from</span> <span class="s1">'redux'</span>
<span class="kr">import</span> <span class="nx">user</span> <span class="nx">from</span> <span class="s1">'./user/userReducer'</span>
<span class="kr">import</span> <span class="nx">obj1</span> <span class="nx">from</span> <span class="s1">'./obj1/obj1Reducer'</span>
<span class="kr">import</span> <span class="nx">obj2</span> <span class="nx">from</span> <span class="s1">'./obj2/obj2Reducer'</span>

<span class="nx">combineReducers</span><span class="p">({</span>
  <span class="nx">user</span><span class="p">,</span>
  <span class="nx">obj1</span><span class="p">,</span>
  <span class="nx">obj2</span>
<span class="p">})</span>
</code></pre>
<p>Next, Include the new <em>Reducers</em> in <a href="http://redux.js.org/docs/api/combineReducers.html">combineReducers()</a> (see JavaScript tab)</p>

<p>After this, we need to configure the middleware stack to work with the SDK. Pick the section that applies to your chosen middleware stack - either <a href="https://github.com/gaearon/redux-thunk">redux-thunk</a> or <a href="https://github.com/redux-saga/redux-saga">redux-saga</a> - then follow the corresponding instructions:</p>
<h4 id='a-href-https-github-com-gaearon-redux-thunk-redux-thunk-a'><a href="https://github.com/gaearon/redux-thunk">redux-thunk</a></h4>
<p>Download <a href="https://github.com/gaearon/redux-thunk">redux-thunk</a> and include it in <a href="http://redux.js.org/docs/api/createStore.html">createStore()</a>:
```javascript
import { createStore, applyMiddleware } from &#39;redux&#39;
import thunk from &#39;redux-thunk&#39;</p>

<p>createStore(rootReducer, initialState, applyMiddleware(thunk))
```</p>
<h4 id='a-href-https-github-com-redux-saga-redux-saga-redux-saga-a'><a href="https://github.com/redux-saga/redux-saga">redux-saga</a></h4>
<p>Download <a href="https://github.com/redux-saga/redux-saga">redux-saga</a> and include it in <a href="http://redux.js.org/docs/api/createStore.html">createStore()</a>:
```javascript
import { createStore, applyMiddleware } from &#39;redux&#39;
import createSagaMiddleware from &#39;redux-saga&#39;
import rootSaga from &#39;./sagas.js&#39;</p>

<p>const sagaMiddleware = createSagaMiddleware()
createStore(rootReducer, initialState, applyMiddleware(sagaMiddleware))
sagaMiddleware.run(rootSaga)
```</p>
<h4 id='working-with-the-sdk'>Working with the SDK</h4><pre class="highlight javascript tab-javascript"><code><span class="kr">import</span> <span class="p">{</span> <span class="nx">getUserDetails</span><span class="p">,</span> <span class="nx">signin</span><span class="p">,</span> <span class="nx">useAnonymousAuth</span><span class="p">,</span> <span class="nx">signout</span> <span class="p">}</span> <span class="nx">from</span> <span class="s1">'./user/userActions'</span>

<span class="nx">store</span><span class="p">.</span><span class="nx">dispatch</span><span class="p">(</span><span class="nx">signin</span><span class="p">(</span><span class="nx">username</span><span class="p">,</span> <span class="nx">password</span><span class="p">))</span>
<span class="nx">store</span><span class="p">.</span><span class="nx">dispatch</span><span class="p">(</span><span class="nx">getUserDetails</span><span class="p">())</span>
</code></pre>
<p>Once the above is completed, import <code>Actions</code> and dispatch them easily!</p>

<p>Review the full API reference for our <a href="#vanilla-sdk">Vanilla SDK</a> to get started with your back end!</p>
<h3 id='examples-for-react-redux'>Examples for React/Redux</h3>
<p>Below are a few examples of Redux code that uses the Back&amp; SDK:
- <a href="http://codepen.io/backand/pen/VmRajE">codepen example (thunk)</a>
- <a href="http://codepen.io/backand/pen/pRgqyx">codepen example (saga)</a>
- <a href="https://github.com/backand/react-native-example/tree/sdk">react-native-example</a></p>
<h2 id='vue-js'>Vue.js</h2>
<p>Vue.js is a progressive framework designed to provide an intuitive means by which a front-end developer can build their application. It is designed to be incrementally adaptable, allowing you to use it as often as you like, and provides a lightweight set of tools for adding dynamic functionality to a web app. By providing dynamic backing to the view model, you can easily make a Vue.js-based application into a large and feature-rich web app. In this section, we&#39;ll look at how we can use Backand&#39;s Vanilla SDK in a Vue.js-based application to provide the backing for that data service.</p>

<p>Note: This example is also available on <a href="http://codepen.io/backand/pen/ZLwwZg/?editors=1010">Codepen</a></p>
<h3 id='including-and-initializing-the-sdk'>Including and Initializing the SDK</h3><pre class="highlight html tab-html"><code><span class="c">&lt;!-- Include the Back&amp; SDK --&gt;</span>
<span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span> <span class="na">src=</span><span class="s">"https://cdn.backand.net/vanilla-sdk/1.2.9/backand.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre>
<p>The first step in connecting your Vue.js app to Backand is to import the JavaScript file containing the Backand SDK. You can either do this through a package manager, or via our CDN.</p>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">myApp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Vue</span><span class="p">({</span>
  <span class="c1">// Other constructor code here</span>
  <span class="na">beforeMount</span><span class="p">:</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="nx">backand</span><span class="p">.</span><span class="nx">init</span> <span class="o">&amp;&amp;</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">init</span><span class="p">({</span>
      <span class="na">appName</span><span class="p">:</span> <span class="s1">'reactnativetodoexample'</span><span class="p">,</span>
      <span class="na">signUpToken</span><span class="p">:</span> <span class="s1">'4c128c04-7193-4eb1-8f19-2b742a2a7bba'</span><span class="p">,</span>
      <span class="na">anonymousToken</span><span class="p">:</span> <span class="s1">'2214c4be-d1b1-4023-bdfd-0d83adab8235'</span>
    <span class="p">});</span>
  <span class="p">},</span>
  <span class="c1">// Other constructor code here</span>
<span class="p">});</span>
</code></pre>
<p>Once you&#39;ve included the SDK, you&#39;ll have access to the functionality via the global object <code>backand</code>. You&#39;ll next use this to initialize our connection to Backand in the constructor for your app&#39;s Vue instance. We recommend putting the initialization in the <code>beforeMount</code> lifecycle hook, but any location or hook that initializes the SDK before it is used should be sufficient:</p>

<p>With that, the Backand SDK is initialized. This post uses a pre-built demo app, <code>reactnativetodoexample</code>, and its associated keys. If you wish to connect this demo to your own Backand application, simply replace <code>appName</code>, <code>signUpToken</code>, and <code>anonymousToken</code> with the correct values from your Backand application&#39;s dashboard. Aside from updating the data model to include the <code>ToDo</code> object, the only thing you will need to do to ensure your app operates in the same way is to add the relevant custom actions when editing a <code>ToDo</code> item (see below).</p>
<h3 id='loading-the-object-data'>Loading the object data</h3>
<blockquote>
<p>Next, you need to define a global method that knows how to load the object data from your Backand application. To do this, first define an empty data member to store the future results from the API:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">myApp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Vue</span><span class="p">({</span>
  <span class="c1">// Other constructor code here</span>
  <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">todos</span><span class="p">:</span> <span class="p">[]</span>
  <span class="p">},</span>
  <span class="c1">// beforeMount: () =&gt; { ...</span>
<span class="p">});</span>

</code></pre>
<blockquote>
<p>This data member will hold the list of ToDo items obtained from the server. Next, we&#39;ll define a global method to populate this data member:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">myApp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Vue</span><span class="p">({</span>
  <span class="c1">// Other constructor code here</span>
  <span class="na">methods</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">fetchTodos</span><span class="p">:</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
      <span class="k">this</span><span class="p">.</span><span class="nx">todos</span> <span class="o">=</span> <span class="p">[];</span>
      <span class="kd">let</span> <span class="nx">params</span> <span class="o">=</span> <span class="p">{</span>
        <span class="na">sort</span><span class="p">:</span> <span class="p">[</span><span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">sort</span><span class="p">.</span><span class="nx">create</span><span class="p">(</span><span class="s1">'creationDate'</span><span class="p">,</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">sort</span><span class="p">.</span><span class="nx">orders</span><span class="p">.</span><span class="nx">desc</span><span class="p">)],</span>
        <span class="na">exclude</span><span class="p">:</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">exclude</span><span class="p">.</span><span class="nx">options</span><span class="p">.</span><span class="nx">all</span><span class="p">,</span>
        <span class="na">pageSize</span><span class="p">:</span> <span class="mi">1000000</span><span class="p">,</span>
        <span class="na">pageNumber</span><span class="p">:</span> <span class="mi">1</span><span class="p">,</span>
      <span class="p">}</span>
      <span class="nx">backand</span><span class="p">.</span><span class="nx">user</span><span class="p">.</span><span class="nx">getUserDetails</span><span class="p">().</span><span class="nx">then</span><span class="p">(</span><span class="nx">res</span><span class="o">=&gt;</span> <span class="p">{</span>
        <span class="k">if</span> <span class="p">(</span><span class="nx">res</span><span class="p">.</span><span class="nx">data</span> <span class="o">!=</span> <span class="kc">null</span> <span class="o">&amp;&amp;</span> <span class="nx">res</span><span class="p">.</span><span class="nx">data</span><span class="p">.</span><span class="nx">userId</span><span class="p">)</span> <span class="p">{</span>
          <span class="nx">params</span><span class="p">.</span><span class="nx">filter</span> <span class="o">=</span> <span class="p">[</span><span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">filter</span><span class="p">.</span><span class="nx">create</span><span class="p">(</span><span class="s1">'user'</span><span class="p">,</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">filter</span><span class="p">.</span><span class="nx">operators</span><span class="p">.</span><span class="nx">relation</span><span class="p">.</span><span class="k">in</span><span class="p">,</span> <span class="nx">user</span><span class="p">.</span><span class="nx">data</span><span class="p">.</span><span class="nx">userId</span><span class="p">)];</span>
        <span class="p">}</span>
        <span class="k">return</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">getList</span><span class="p">(</span><span class="s1">'todos'</span><span class="p">,</span> <span class="nx">params</span><span class="p">);</span>
      <span class="p">}).</span><span class="nx">then</span><span class="p">(</span><span class="nx">res</span><span class="o">=&gt;</span> <span class="p">{</span> <span class="k">this</span><span class="p">.</span><span class="nx">todos</span> <span class="o">=</span> <span class="nx">res</span><span class="p">.</span><span class="nx">data</span> <span class="p">}).</span><span class="k">catch</span><span class="p">(</span><span class="nx">error</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>
  <span class="c1">// Other constructor code here</span>
<span class="p">});</span>
</code></pre>
<p>This function first clears out the <code>todos</code> data member, then defines a set of filter params using helper methods in the SDK (refer to our documentation for more information). Then, it calls <code>backand.user.getUserDetails()</code> to determine if the list should be restricted to the currently logged-in user. Finally, the method calls <code>backand.object.getList()</code> to fetch the list of objects in the SDK, and then updates the todos data container in the promise resolution block.</p>

<blockquote>
<p>Now, you simply need to call <code>fetchTodos()</code> in the appropriate location in the Vue lifecycle. To load the data when mounting is complete, you can add it to the <code>mounted</code> handler like so:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">myApp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Vue</span><span class="p">({</span>
  <span class="c1">// Other constructor code here</span>
  <span class="na">mounted</span><span class="p">:</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">this</span><span class="p">.</span><span class="nx">fetchTodos</span><span class="p">();</span>
  <span class="p">},</span>
  <span class="c1">// Other constructor code here</span>
<span class="p">});</span>
</code></pre><h3 id='creating-editing-and-deleting-objects'>Creating, Editing, and Deleting Objects</h3>
<blockquote>
<p>The following code is a handler for an x-template component titled <code>todo-form</code>, which is used to create a new <code>ToDo</code> entry in the application:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="nx">Vue</span><span class="p">.</span><span class="nx">component</span><span class="p">(</span><span class="s1">'todo-form'</span><span class="p">,</span> <span class="p">{</span>
  <span class="na">template</span><span class="p">:</span> <span class="s1">'#todo-form'</span><span class="p">,</span>
  <span class="na">data</span><span class="p">:</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="p">{</span>
      <span class="na">input</span><span class="p">:</span> <span class="s1">''</span>
    <span class="p">}</span>
  <span class="p">},</span>
  <span class="na">methods</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">create</span><span class="p">:</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
      <span class="c1">// console.log(this.input)</span>
      <span class="k">if</span> <span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">input</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">backand</span><span class="p">.</span><span class="nx">user</span><span class="p">.</span><span class="nx">getUserDetails</span><span class="p">().</span><span class="nx">then</span><span class="p">(</span><span class="nx">res</span><span class="o">=&gt;</span> <span class="p">{</span>
          <span class="k">return</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">create</span><span class="p">(</span><span class="nx">objectName</span><span class="p">,</span> <span class="p">{</span>
            <span class="na">text</span><span class="p">:</span> <span class="k">this</span><span class="p">.</span><span class="nx">input</span><span class="p">,</span>
            <span class="na">creationDate</span><span class="p">:</span> <span class="p">(</span><span class="k">new</span> <span class="nb">Date</span><span class="p">()).</span><span class="nx">toISOString</span><span class="p">(),</span>
            <span class="na">completionDate</span><span class="p">:</span> <span class="kc">null</span><span class="p">,</span>
            <span class="na">user</span><span class="p">:</span> <span class="nx">res</span><span class="p">.</span><span class="nx">data</span><span class="p">.</span><span class="nx">userId</span>
          <span class="p">});</span>
        <span class="p">}).</span><span class="nx">then</span><span class="p">(</span><span class="nx">res</span><span class="o">=&gt;</span> <span class="k">this</span><span class="p">.</span><span class="nx">input</span> <span class="o">=</span> <span class="s1">''</span><span class="p">).</span><span class="k">catch</span><span class="p">(</span><span class="nx">error</span><span class="p">);</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">})</span>

</code></pre>
<p>Once you&#39;ve got the basic display up and running, you&#39;ll want to add methods to create, update, and delete the ToDo items based on user actions.</p>

<p>Following a similar pattern to the initial load, this code first checks for a user context. If a user is not logged in, this call will have a value of <code>null</code>. Otherwise, we can use the <code>userId</code> of the active user to assign ownership of the new <code>ToDo</code> item. The code then calls <code>backand.object.create()</code> to create the record in your Backand application.</p>

<blockquote>
<p>You can follow a similar pattern when updating an object:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kr">const</span> <span class="nx">todoItem</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">props</span><span class="p">:</span> <span class="p">{</span>
    <span class="s1">'todo'</span><span class="p">:</span> <span class="nb">Object</span>
  <span class="p">},</span>
  <span class="na">template</span><span class="p">:</span> <span class="s1">'#todo-item'</span><span class="p">,</span>
  <span class="na">methods</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">update</span><span class="p">:</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
      <span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">update</span><span class="p">(</span><span class="nx">objectName</span><span class="p">,</span> <span class="k">this</span><span class="p">.</span><span class="nx">todo</span><span class="p">.</span><span class="nx">id</span><span class="p">,</span> <span class="nb">Object</span><span class="p">.</span><span class="nx">assign</span><span class="p">({},</span> <span class="k">this</span><span class="p">.</span><span class="nx">todo</span><span class="p">,</span> <span class="p">{</span>
        <span class="na">completionDate</span><span class="p">:</span> <span class="k">this</span><span class="p">.</span><span class="nx">todo</span><span class="p">.</span><span class="nx">completionDate</span> <span class="p">?</span> <span class="kc">null</span> <span class="p">:</span> <span class="p">(</span><span class="k">new</span> <span class="nb">Date</span><span class="p">()).</span><span class="nx">toISOString</span><span class="p">()</span>
      <span class="p">})).</span><span class="k">catch</span><span class="p">(</span><span class="nx">error</span><span class="p">);</span>
    <span class="p">},</span>
    <span class="na">remove</span><span class="p">:</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
      <span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">remove</span><span class="p">(</span><span class="nx">objectName</span><span class="p">,</span> <span class="k">this</span><span class="p">.</span><span class="nx">todo</span><span class="p">.</span><span class="nx">id</span><span class="p">).</span><span class="k">catch</span><span class="p">(</span><span class="nx">error</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">};</span>
</code></pre>
<p>This function demonstrates how to update a <code>ToDo</code> item&#39;s completion date using <code>backand.object.update()</code> - simply provide the object name, the object ID, and the collection of changes to be made. The above method also provides deletion functionality with the remove method. Simply provide the object name and the ID of the <code>ToDo</code> item to delete the entry from your database.</p>
<h3 id='keeping-the-app-up-to-date'>Keeping the app up-to-date</h3>
<blockquote>
<p>First, create the appropriate Custom JavaScript actions in your Backand app&#39;s dashboard, and have them emit an event titled &quot;update_todos&quot; as follows:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="nx">socket</span><span class="p">.</span><span class="nx">emitAll</span><span class="p">(</span><span class="s2">"update_todos"</span><span class="p">,</span> <span class="p">{});</span>
</code></pre>
<p>While you now have a fully-functional CRUD interface for the <code>todo</code> object, you have not yet built a way for your application to receive - and respond to - updates. You can accomplish this using Backand&#39;s Realtime Communications capability.</p>

<p>This will send a socket message to all connected clients. At the moment we do not provide any parameters to this call (just an empty object - <code>{}</code>), but you can replace this with any of the variables available to your custom action, such as the <code>dbRow</code> that was just modified.</p>

<blockquote>
<p>First, include the Socket.io library in the appropriate location in your code:</p>
</blockquote>
<pre class="highlight html tab-html"><code>  <span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span> <span class="na">src=</span><span class="s">"https://cdn.backand.net/socket.io/1.4.5/socket.io.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre>
<p>Now that you have a set of actions designed to announce changes to your <code>ToDo</code> database object, we need to configure the client side to receive socket communications.</p>

<blockquote>
<p>Once that&#39;s done, we need to set the SDK to enable socket mode:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">myApp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Vue</span><span class="p">({</span>
  <span class="c1">// Other constructor code here</span>
  <span class="na">beforeMount</span><span class="p">:</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="nx">backand</span><span class="p">.</span><span class="nx">init</span> <span class="o">&amp;&amp;</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">init</span><span class="p">({</span>
      <span class="na">appName</span><span class="p">:</span> <span class="s1">'reactnativetodoexample'</span><span class="p">,</span>
      <span class="na">signUpToken</span><span class="p">:</span> <span class="s1">'4c128c04-7193-4eb1-8f19-2b742a2a7bba'</span><span class="p">,</span>
      <span class="na">anonymousToken</span><span class="p">:</span> <span class="s1">'2214c4be-d1b1-4023-bdfd-0d83adab8235'</span><span class="p">,</span>
      <span class="na">runSocket</span><span class="p">:</span> <span class="kc">true</span>
    <span class="p">});</span>
  <span class="p">},</span>
  <span class="c1">// Other constructor code here</span>
<span class="p">});</span>
</code></pre>
<blockquote>
<p>Finally, you need to add an event handler. Update your mounted handler to include the event handler function as follows:</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">myApp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Vue</span><span class="p">({</span>
  <span class="c1">// Other constructor code here</span>

  <span class="na">mounted</span><span class="p">:</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">this</span><span class="p">.</span><span class="nx">fetchTodos</span><span class="p">();</span>
    <span class="nx">backand</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span><span class="s1">'update_todos'</span><span class="p">,</span> <span class="p">(</span><span class="nx">data</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">this</span><span class="p">.</span><span class="nx">fetchTodos</span><span class="p">();</span>
    <span class="p">});</span>
  <span class="p">},</span>
  <span class="c1">// Other constructor code here</span>
<span class="p">});</span>
</code></pre>
<p>This function handles all update_todos events the same way - by reloading the entire list from the server. You can use a similar technique to write different handlers for each database operation, or to perform other types of logic based on your application&#39;s needs.</p>
<h3 id='conclusion'>Conclusion</h3>
<p>With the above code, you now have a simple data service that you can use to update your Vue.js app&#39;s user interface with results from a Backand application. You can create, update, and delete records at will in a responsive manner, no server code required. With Backand, you can accelerate your Vue.js development, focusing on what makes your app unique, and leave the server side to us.</p>
<h2 id='jquery'>jQuery</h2>
<p>JQuery is the most widely-deployed JavaScript library. It provides a comprehensive set of responsive tools for dynamically working with an HTML page&#39;s DOM, and is responsible for establishing and guiding a lot of the patterns that are the standard in web development. In this section, we&#39;ll look at how you can integrate the Back&amp; Vanilla SDK with an app built with JQuery.</p>

<p>Note: The code for this section is also available on <a href="http://codepen.io/backand/pen/VPRpBN?editors=1010">CodePen</a></p>
<h3 id='including-and-initializing-the-sdk-2'>Including and Initializing the SDK</h3><pre class="highlight html tab-html"><code><span class="c">&lt;!-- Include the Back&amp; SDK --&gt;</span>
<span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span> <span class="na">src=</span><span class="s">"https://cdn.backand.net/vanilla-sdk/1.2.9/backand.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre>
<p>The first step in connecting your JQuery-based web app to Backand is to include the JavaScript file containing the Backand SDK. You can either do this through a package manager, or via our CDN.</p>
<h3 id='creating-the-service'>Creating the Service</h3><pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">dataService</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">init</span><span class="p">:</span> <span class="kd">function</span><span class="p">(){</span>
    <span class="nx">backand</span><span class="p">.</span><span class="nx">init</span><span class="p">(</span>
      <span class="p">{</span><span class="na">appName</span><span class="p">:</span> <span class="s1">'reactnativetodoexample'</span><span class="p">,</span>
       <span class="na">signUpToken</span><span class="p">:</span> <span class="s1">'4c128c04-7193-4eb1-8f19-2b742a2a7bba'</span><span class="p">,</span>
       <span class="na">anonymousToken</span><span class="p">:</span> <span class="s1">'2214c4be-d1b1-4023-bdfd-0d83adab8235'</span><span class="p">,</span>
       <span class="na">runSocket</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">}</span>
    <span class="p">);</span>   
  <span class="p">},</span>
  <span class="c1">// Other code here</span>
<span class="p">};</span>
</code></pre>
<p>Once you&#39;ve included the SDK, you&#39;ll have access to the functionality via the global object <code>backand</code>. To integrate Back&amp; with a JQuery-based web app, we&#39;ll make use of a global service variable that will wrap the SDK. This service will handle initialization of the sdk, and provide all of the tools necessary to work with a Backand application. We&#39;ll start by declaring the service and initializing Backand with the following code:</p>

<p>This defines an object - <code>dataService</code> - that can be used to interact with the Backand SDK. In the data service, we define a method - <code>init</code> - that is used to initialize the SDK&#39;s connection to a Backand application. Simply call <code>dataService.init()</code> at the appropriate location in your app&#39;s initialization code, and the SDK is ready to use (in the example, we do this in the $(document).ready handler, but this is not required).</p>

<p>This content uses a pre-built demo app, <code>reactnativetodoexample</code>, and its associated keys. If you wish to connect this demo to your own Backand application, simply replace <code>appName</code>, <code>signUpToken</code>, and <code>anonymousToken</code> with the correct values from your Backand application&#39;s dashboard. Aside from updating the data model to include the <code>ToDo</code> object, the only thing you will need to do to ensure your app operates in the same way is to add the relevant custom actions when editing a <code>ToDo</code> item (see below).</p>
<h3 id='fetching-and-manipulating-the-data'>Fetching and Manipulating the Data</h3><pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">dataService</span> <span class="o">=</span> <span class="p">{</span>
  <span class="c1">//other code here</span>
  <span class="na">getList</span><span class="p">:</span> <span class="kd">function</span><span class="p">(){</span>
        <span class="kd">var</span> <span class="nx">params</span> <span class="o">=</span>  <span class="p">{</span>
          <span class="na">sort</span><span class="p">:</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">sort</span><span class="p">.</span><span class="nx">create</span><span class="p">(</span><span class="s1">'creationDate'</span><span class="p">,</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">sort</span><span class="p">.</span><span class="nx">orders</span><span class="p">.</span><span class="nx">desc</span><span class="p">),</span>
          <span class="na">exclude</span><span class="p">:</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">exclude</span><span class="p">.</span><span class="nx">options</span><span class="p">.</span><span class="nx">all</span><span class="p">,</span>
          <span class="na">pageSize</span><span class="p">:</span> <span class="mi">10</span><span class="p">,</span>
          <span class="na">pageNumber</span><span class="p">:</span> <span class="mi">1</span><span class="p">,</span>
          <span class="na">filter</span><span class="p">:</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">filter</span><span class="p">.</span><span class="nx">create</span><span class="p">(</span><span class="s1">'completionDate'</span><span class="p">,</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">helpers</span><span class="p">.</span><span class="nx">filter</span><span class="p">.</span><span class="nx">operators</span><span class="p">.</span><span class="nx">date</span><span class="p">.</span><span class="nx">empty</span><span class="p">,</span> <span class="s1">''</span><span class="p">)</span>
        <span class="p">};</span>
        <span class="k">return</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">getList</span><span class="p">(</span><span class="s1">'todos'</span><span class="p">,</span><span class="nx">params</span><span class="p">);</span>
  <span class="p">},</span>
  <span class="c1">// Other code here</span>
<span class="p">};</span>
</code></pre>
<p>Now that our app is wired up to Backand, we&#39;ll want to start writing code to work with our Backand application&#39;s objects. We can retrieve a list of <code>todo</code> objects from the server by adding a property to the <code>dataService</code> object, <code>getList</code>, that calls the appropriate SDK method</p>

<p>This function first defines a set of filter params using helper methods in the SDK (refer to our documentation for more information). It then calls <code>backand.object.getList()</code> to fetch the list of objects in the SDK. The result of this call - a promise - is then passed back to the calling code. The calling code can then create its own success and failure handlers, using <code>.then</code> and <code>.catch</code>, and update internal state appropriately.</p>

<blockquote>
<p>You can use this technique to wrap every call in the Backand SDK, providing your JQuery code with full access to the server.</p>
</blockquote>
<pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">dataService</span> <span class="o">=</span> <span class="p">{</span>
  <span class="c1">//other code here</span>
  <span class="na">create</span><span class="p">:</span><span class="kd">function</span><span class="p">(</span><span class="nx">text</span><span class="p">){</span>
    <span class="k">return</span> <span class="nx">backand</span><span class="p">.</span><span class="nx">object</span><span class="p">.</span><span class="nx">create</span><span class="p">(</span><span class="s1">'todos'</span><span class="p">,</span>
          <span class="p">{</span><span class="s2">"text"</span><span class="p">:</span><span class="nx">text</span><span class="p">,</span><span class="s2">"creationDate"</span><span class="p">:</span><span class="k">new</span> <span class="nb">Date</span><span class="p">()});</span>
  <span class="p">},</span>
  <span class="c1">// Other code here</span>
<span class="p">};</span>
</code></pre>
<p>From this point onward, working with the SDK is a matter of writing wrapper methods in the <code>dataService</code> object for each SDK method with which you wish to interact. Backand provides interfaces for all of the common database manipulation tasks. For example, the call in the sidebar defines a method - <code>create</code> - that creates a new entry in the database.</p>
<h3 id='handling-responses'>Handling Responses</h3><pre class="highlight javascript tab-javascript--persistent"><code><span class="kd">var</span> <span class="nx">loadList</span> <span class="o">=</span> <span class="kd">function</span><span class="p">(){</span>
  <span class="nx">dataService</span><span class="p">.</span><span class="nx">getList</span><span class="p">().</span><span class="nx">then</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">response</span><span class="p">){</span>
<span class="c1">// call a helper function to populate results in our UI</span>
      <span class="nx">$</span><span class="p">.</span><span class="nx">each</span><span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">data</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">i</span><span class="p">,</span> <span class="nx">todo</span><span class="p">){</span>
        <span class="nx">appendTodo</span><span class="p">(</span><span class="nx">todo</span><span class="p">.</span><span class="nx">text</span><span class="p">,</span><span class="nx">todo</span><span class="p">.</span><span class="nx">id</span><span class="p">);</span>
      <span class="p">})</span>
   <span class="p">})</span>
<span class="p">}</span>
</code></pre>
<p>All Backand SDK methods return a promise, performing the tasks requested asynchronously. To handle the responses, we simply need to write the appropriate handlers for the <code>.then</code> and <code>.catch</code> calls. In the code to the side, for example, we write a simple set of handlers for the <code>getList</code> call.</p>

<p>As JQuery is a very flexible framework, it is hard to provide concrete guidance on exactly where SDK should take place in terms of the program&#39;s execution. The CodePen example demonstrates one method of creating this component, but you do not need to mimic the code structure there exactly. The key component is to ensure that <code>backand.init()</code> is called prior to any SDK calls taking place, otherwise the calls from the SDK will fail.</p>
<h3 id='conclusion-2'>Conclusion</h3>
<p>With the above code, you now have a simple data service that you can use to update your JQuery-based app&#39;s user interface with results from a Backand application. You can make full use of the SDK, with the capability to create, update, and delete records at will in a responsive manner, no server code required. With Backand, you can accelerate your JQuery front-end development, focusing on what makes your app unique, and leave the server side to us.</p>

      </div>
      <div class="dark-box">
      </div>
    </div>
  </body>
</html>
