# Portfolio deployment

This project uses PHP templates locally and exports them to static HTML for Vercel.
Vercel does not execute the root-level PHP pages in this setup.

## Build for Vercel

From the project directory, run:

```powershell
& 'E:\APPS\XAMPP\xampp\php\php.exe' .\build.php
```

The generated site is written to `dist/`. Commit and push the updated `dist/` folder
along with your source changes. Vercel is configured by `vercel.json` to publish
`dist/`; leave the Vercel Build Command empty and use the repository root as the
Root Directory.

Run the export again whenever you change a PHP page, `data.php`, or a site asset.
