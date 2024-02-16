const fs = require('fs');
const path = require('path');

// Remove existing built folders
const buildPath = path.join(__dirname, 'build/en-gb/_');
fs.rmdirSync(buildPath, { recursive: true });

// Create symbolic links
const sourcePath = path.join(__dirname, 'sources/plenty-developers-docs-ui/public/_');
const symlinkPath = path.join(__dirname, 'build/en-gb/_');

fs.symlinkSync(sourcePath, symlinkPath, 'dir');