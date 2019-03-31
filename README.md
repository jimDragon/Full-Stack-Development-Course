To locally deploy, fork this repository and then, on a folder on your PC enter the following commands (replacing YOUR_GITHUB_USERNAME with, well, your GitHub username.)

```
git init
git remote add origin https://github.com/<YOUR_GITHUB_USERNAME>/Full-Stack-Development-Course
git pull origin master
git push --set-upstream origin master
```

When creating a feature, push to your repository and use GitHub's pull request interface to submit a pull request to the original repository. Your pull request will then be reviewed and eventually merged.

The code has been written in a way that is totally incomplete, and it requires your input to be completed. Comments have been added here and there to help you understand the logic behind certain functions.

If you want to modify the stylesheets, download a LESS autocompile package for your IDE of choice. If using the Atom Editor, you can download [less-compile-on-save](https://atom.io/packages/less-compile-on-save).

**TODO:**
 - Split regularly used functions to their own file and include it on files
 - Split functionality into different modules
 - Post creation form and API
 - Posts list on frontend and admin page
 - Post edit on admin page
 - Post delete on admin page
 - Add comments on post frontend
 - Add comment management on admin page
 - ... (WIP)
