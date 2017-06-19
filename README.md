# YouthCARE Theme
This is a custom theme build for YouthCARE Minnesota by team Drop It Like It's HOTH for the 2017 Twin Cities Overnight Website Challenge brought to you by The Nerdery Foundation.

Our team would like to thank [Deploy Bot](https://deploybot.com) for providing us one month of service on their continous delivery platform. We would also like to thank [Rocket Squirrel](https://rocketsquirrel.io) for providing our team development and staging servers for the event.

## Workflow
To contribute to this theme, Node.js 6.x+ is required. To begin working locally, clone the repository to your local drive and run the following command.

```bash
npm install
npm run build
```

### General Architecture
The general idea is that each component will be sandboxed into three separate files: `component-{name}.php`, `component/{name}.js`, and `component/_{name}.scss`. This helps us narrow down bug fixing faster and develop the theme quicker. We'll be using a few tools to help us build our CSS and JavaScript files to keep the site's performance fast and our development expedient.

We're using [npm](https://npmjs.com) to ensure our team is using the same tools to build our theme. After you clone the theme, run the following commands to get the development environment setup and started.

### JavaScript
The theme will use [Webpack](http://webpack.github.io) to wrap our JavaScript files and bundle them into `main.js`. jQuery will be listed as a dependency of the bundled file, `main.js`, and will be freely available to use throughout the entire project.

### CSS
The build will use `node-sass` to compile Sass files into a single CSS file.

### Working Locally
You can run `npm run watch` to have both webpack and node-sass to watch for changes to their respective files and compile the theme files on command.

### Staging and Deployment
We'll be using the classic `git` workflow of merge requests (pull requests) to submit code to the `master` branch. Deployment will be automatically run and submitted to the staging server upon merging into master.

Before submitting your merge request, run the command `npm run build` to compile JavaScript and CSS files. There should be no errors and the builds should complete successfuly.
