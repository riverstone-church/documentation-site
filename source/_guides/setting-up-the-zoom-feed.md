---
extends: _layouts.guide
title: Setting Up the Zoom Feed
date: 2022-04-12
---

## Turn the Streaming Equipment On
See [Turning the Media Equipment On](https://docs.riverstonechurch.net/guides/turning-media-equipment-on#livestream).

## Start the Zoom Meeting
1. Open up Zoom and start the meeting.

![](/assets/images/setting-up-the-zoom-feed/select-zoom-meeting.jpeg)
![](/assets/images/setting-up-the-zoom-feed/start-zoom-meeting.jpeg)

2. Verify the correct audio source is selected and the microphone icon is unmuted.

![](/assets/images/setting-up-the-zoom-feed/select-audio-source.jpeg)

## Verify OBS Settings
Verify, in OBS, the “Livestream” scene is selected, the only source that is visible is the “Blackmagic Device”, and the “Mic/Aux” audio input is unmuted and turned up the whole way.

![](/assets/images/setting-up-the-zoom-feed/verify-obs-settings.jpeg)

## Start the Virtual Camera
In order to get the video feed from OBS into Zoom, we use what is called a “Virtual Camera”. By enabling the Virtual Camera in OBS, zoom will pick up the feed just as if it was a webcam plugged directly into the computer.

1. If the virtual camera is not already started, click “Start Virtual Camera” within OBS.

![](/assets/images/setting-up-the-zoom-feed/start-virtual-camera.jpeg)

2. In Zoom, select “OBS Virtual Camera” as the video source.

![](/assets/images/setting-up-the-zoom-feed/select-video-source.jpeg)

3. Enable video

![](/assets/images/setting-up-the-zoom-feed/enable-video.jpeg)

## Start Recording
If you would like to record as well as stream via Zoom, you can start the recording in OBS. **Do not forget to stop the recording after you are done.**

1. Click “Start Recording” within OBS.

![](/assets/images/setting-up-the-zoom-feed/start-recording.jpeg)