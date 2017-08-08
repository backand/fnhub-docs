---
title: FnHub.io Documentation

language_tabs: # must be one of https://git.io/vQNgJ
  - shell

toc_footers:
  - <a href='#'>Sign Up for a Developer Key</a>
  - <a href='https://github.com/tripit/slate'>Documentation Powered by Slate</a>

includes:
  - cli

search: true
---

# Quick Start

Use the quickstart guides below to get up and running with FnHub.io! We've broken the quickstart guides into two categories:

* **Publishers** - The Publisher's quickstart focuses on publishing a function to fnhub.io
* **Consumers** - The Consumer's quickstart focuses on consuming functions published to fnhub.io in a serverless application

## For Function publishers

Publishing a function on FnHub.io is quick and easy! Just follow these three steps to release your package to the world:

1. Initialize your function package using fnhub init:

    `fnhub init --name myAwesomePackage --author test@example.com`

2. Add your serverless functions to the module using fnhub add:

    `fnhub add -fn functionName -fnh index.handler -fnr nodejs6.10`

3. Publish your module to fnhub.io using fnhub publish:

    `fnhub publish`

And that's it! With these three commands completed, your function is now available on FnHub.io, ready to be distributed to the serverless development community!

## For Function Consumers

Looking to accelerate your serverless development with a FnHub.io package? Pulling down and deploying a function is quick and painless! Just follow these easy steps:

1. Initialize your serverless function platform connection using fnhub init:

    `fnhub init --name myAwesomeFunctionPackage --author test@example.com`


2. Pull down a fnhub function using fnhub include:

    `fnhub include reallyUsefulFunctionPackage`


3. Make any changes necessary to configuration, environment variables, and other application-specific data.
Deploy your function to your serverless platform of choice using fnhub deploy:

    `fnhub deploy`

And that's it! FnHub.io is designed to be easy to use, both for sharing and for pulling down shared code. With these simple steps, you can save time and effort by leveraging the work of others.
