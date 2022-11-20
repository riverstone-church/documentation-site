---
extends: _layouts.doc
title: Soundboard Workflow
date: 2022-11-20
---

## Before Service

- Load Scene 0, entitled “RiverStone”. This is a generic scene with base settings to get back to a relatively clean
  state.
    - Scenes -> View button -> select scene -> press Go
- Determine which singers are on which mics.
- Determine which instrumentalists are on which inputs.
- Determine who is preaching and on which mic.
- From Library, load pastor/speaker vocal settings to either Channel 1 (head mic) or Channel 2 (wireless
  pulpit mic).
    - Select channel button -> Library button -> highlight preset to load
    - Under Recall Scope (far left), ensure that every box is checked except “Sends/Main”. Uncheck
      the “Sends/Main” box. This will prevent levels of the IEMs from being set differently.
    - Press Load Preset
    - Use “sends on main” to ensure that the pastor and pulpit mic are set to appropriate levels for
      the Stage Monitor and Livestream (BUS 1 & 2). It should be the same level as before, but good
      to check.
- From Library, load vocal singer settings to Channels 4 thru 10 (four wireless and three wired mics).
    - Select channel button -> Library button -> highlight preset to load
    - Under Recall Scope (far left), ensure that every box is checked except “Sends/Main”. Uncheck
      the “Sends/Main” box. This will prevent levels of the IEMs from being set differently as
      different singers use different mics each week.
    - Press Load Preset
    - Use “sends on main” to ensure that the vocal mics are set to appropriate levels for the Stage
      Monitor and Livestream (BUS 1 & 2). It should be the same level as before, but good to check. • From Library, load
      instrumentalist settings to correct input channels. (Generally, do not need to load
      settings for fixed equipment like keyboard and drums. Only for instrumentalists who change or move input positions
      each week.)
    - **Use channel 20 for saxophone only because it requires Phantom/48V power**.
    - Select channel button -> Library button -> highlight preset to load
    - Under Recall Scope (far left), ensure that every box is checked except “Sends/Main”. Uncheck
      the “Sends/Main” box. This will prevent levels of the IEMs from being set differently as
      different instrumentalists use different inputs each week.
    - Press Load Preset
    - Use “sends on main” to ensure that the instruments are set to appropriate levels for the Stage
      Monitor and Livestream (BUS 1 & 2). It should be the same level as before, but good to check.
- Match vocal mics and instrument inputs to IEMs for each of the singers and vocalists. See next page for
  input to IEM mapping.
- Use “Sends on Fader” to raise vocal and instrument for each IEM they are using above the rest. i.e. If
  singer is using Mic 5 and IEM 5, then IEM 5 should have volume of Mic 5 raised to around 0dB. **Note that if the
  channel
  was loaded from the Library correctly, the sends to bus should not have loaded, so the IEM levels should be the same
  as before and not need to be adjusted. But good to check.**
- For vocalists on mics 8-10 (wired), either raise them a bit in the stage monitor (BUS 1) if they don’t
  have an IEM, or raise them on their corresponding wired IEM (10, 12, or 13) if they are using an IEM.
- For instrumentalists on inputs 19, 21, 22, 23, either raise them a bit in the stage monitor (BUS 1) if they
  don’t have an IEM or adjust their IEM to raise them above other levels.. i.e. If guitar player on Channel
  22 is using wired IEM 10, raise their channel 22 to around 0dB on IEM 10 mix only.
- Check all IEM levels to make sure they are appropriate. If wired IEM singers or instrumentalists have
  changed from prior weeks, you might need to bring down some levels. Use the IEM mapping table to
  help.
- Save your scene to a new temporary scene name in case you need to restore it before the service
  begins.
- A reasonable house volume seems to be around -15dB to -10dB and around -10dB on the Fill Speaker
  matrix (matrix 4).
- During service or practice, don’t forget to “solo” the Livestream mix (bus 2) in the headphones and adjust the levels
  using “Sends on Fader” to make it sound good.

## After Service

- If you changed any properties of an input channel such as Gain, EQ, Gate, Compression, name/icon, etc. and intend the
change for future use, please save it back to the Library under the corresponding name.
- Note that the IEM levels cannot be saved per IEM Bus. The IEM levels are properties of the Input Channel. You can save
a new IEM level with the channel but when we restore it, we will not restore the bus sends (including IEM level) because
the mic/IEM combo could change the next week. The IEM channels are in the library only to store the color, icon and
names.
