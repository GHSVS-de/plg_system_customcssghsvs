# plg_system_customcssghsvs
- Joomla system plugin. Load custom CSS files template specifically. BE and FE.

## Restrictions
- No luxury. Just a little helper for special situations.
- CSS files must be created by yourself in subfolders of `/media/plg_system_customcssghsvs` or in template's `/css/` folder (see below).
- Only 1 CSS file per template.
- Only 1 CSS filename allowed (`customcssghsvs.css`).

## How
### For backend templates:
- Example: Template is located in folder `/administrator/templates/be-example/`
- Create a file `customcssghsvs.css`.
- Put it in folder `/media/plg_system_customcssghsvs/css/backend/be-example/`
- Or in `/administrator/templates/be-example/css/plg_system_customcssghsvs/backend/be-example/`
- - Yes, nonsensical complicated, the override variant.
### For frontend templates:
- Example: Template is located in folder `/templates/fe-example/`
- Create a file `customcssghsvs.css`.
- Put it in folder `/media/plg_system_customcssghsvs/css/frontend/fe-example/`
- Or in `/templates/fe-example/css/plg_system_customcssghsvs/frontend/fe-example/`
- - Yes, nonsensical complicated, the override variant.

# My personal build procedure (WSL 1, Debian, Win 10)
- Prepare/adapt `./package.json`.
- `cd /mnt/z/git-kram/plg_system_customcssghsvs`

## node/npm updates/installation
- `npm run g-npm-update-check` or (faster) `ncu`
- `npm run g-ncu-override-json` (if needed) or (faster) `ncu -u`
- `npm install` (if needed)

## Build installable ZIP package
- `node build.js`
- New, installable ZIP is in `./dist` afterwards.
- All packed files for this ZIP can be seen in `./package`. **But only if you disable deletion of this folder at the end of `build.js`**.s

#### For Joomla update server
- Use/See `dist/release.txt` as basic release text.
- Create new release with new tag.
- See extracts(!) of the update and changelog XML for update and changelog servers are in `./dist` as well. Check for necessary additions! Then copy/paste.
