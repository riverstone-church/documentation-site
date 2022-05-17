---
extends: _layouts.guide
title: Editing and Uploading the Sermon
date: 2022-05-17
---

Every week, the recording of the past Sunday’s sermon should be edited down and uploaded to the website, YouTube, Facebook, and the podcast.

## Naming and Organization Conventions
All files relating to the editing of the sermon archive should be contained in a folder with the following format: `YYYYMMDD-SundayMorning`. Where `YYYY` is the four digit year, `MM` is the two digit month, and `DD` is the two digit year. Example: `20220515-SundayMorning`

The Adobe Premiere Pro project or the Apple Final Cut Pro library should be named the same as the folder, as well as the thumbnail file.

All video from the service should be contained in a folder names `Footage` inside the main folder.

Here is an example of what the folder might look like.
![](/assets/images/editing-and-uploading-the-sermon/folder-structure.png)

### Exported Files
`20220515-SundayMorning-Video.mov` is the final exported version of the sermon and `20220515-SundayMorning-Audio.mp3` is the audio only version for the podcast. The name of these files should start with `20220515-SundayMorning` but do not necessarily need to me names the exact same as show above. Just be consistent.

### Title
The title of the video across all platforms where we publish the sermon should follow the following pattern: `MM/DD/YYYY: SERMON TITLE` . Where `YYYY` is the four digit year, `MM` is the two digit month, `DD` is the two digit year, and `SERMON TITLE` is the title of the sermon.

### Description
Generally, we add the preacher’s name and the main scripture reference to the video and podcast descriptions across the various platforms.

Example:
```
Jay Temple
Jeremiah 12:1
```

## Editing
* Trim down the video to just the sermon.
* Add the intro video; overlapping the audio to make a smooth transition to the sermon.
![](/assets/images/editing-and-uploading-the-sermon/final-cut-pro-timeline-intro.png)

* Add a lower third at the beginning and then every 20mins throughout the sermon.
* Add the prayer lower third every 10mins throughout the sermon and then sometimes one at the end.
* Add the outro; overlapping the audio and having it fade out.
![](/assets/images/editing-and-uploading-the-sermon/final-cut-pro-timeline-outro.png)

## Export
Export both a video and audio only version of the final edit. Refer to *Naming and Organization Conventions* for the naming convention.

## Create a Custom Thumbnail

## Upload to Vimeo
After exporting the video, the next step is to upload it to Vimeo under the `Sermons` folder. Refer to *Naming and Organization Conventions* for what to title the video.

Next:
- Update the video description
- Upload the custom thumbnail
- Set the video language to `English (United States)`
![](/assets/images/editing-and-uploading-the-sermon/vimeo-setting-language.gif)

- Publish the video to YouTube and Facebook, from Vimeo.

## Facebook
- Upload custom thumbnail
- Add to playlists

## YouTube
- Upload custom thumbnail.
- Set video, title, and description language to  `English (United States)`
- Add to playlists
- Set video to visibility to `Publish`

## Post on Website
We embed the sermon from Vimeo on our website.
- Copy the video url from Vimeo
- Embed the video on the sermons page using a Squarespace video block

## Upload Podcast
The podcast is hosted through Squarespace. To upload the podcast, you will need to login into the website and add a blog post under the `Sermon Podcast` page.

- Add a blog post to the `Sermon Podcast` page; following the naming convention for the title.
- Add a Squarespace audio block and upload the audio only version you exported earlier.
![](/assets/images/editing-and-uploading-the-sermon/squarespace-audio-block.png)
![](/assets/images/editing-and-uploading-the-sermon/squarespace-uploading-audio-file.png)

- Set the `Title` to the title and the `Author/Artist`  to the preacher’s name
![](/assets/images/editing-and-uploading-the-sermon/squarespace-audio-file-uploaded.png)

- Click on the `Podcasting` tab.
- Set the `Title`
- Set the `Subtitle` to the preacher’s name
- Set the `Summary` and `Episode Notes` to the scripture reference
- Set the `Episode Duration` to the length of the audio file. Note: make sure to it is in the format of `hh:mm:ss`. If the duration is less than an hour, make sure to set `hh` to `00`.
- Wait for the audio file on the `Embed` tab to finish processing.
- Click `Apply`.

- Under the `Options` tab on the blog post dialog, set the `Author` to the preacher’s name or if he is not in the system, just set it to `RiverStone Church`.
- Click `Save & Publish`.