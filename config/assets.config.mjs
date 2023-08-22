import fs from 'fs-extra'

try {
  fs.copySync('./src../site_yonetim/site_yonetim///', './dist../site_yonetim/site_yonetim///')
  console.log('site_yonetim/site_yonetim// copy success!')
} catch (error) {
  console.error(error)
}
