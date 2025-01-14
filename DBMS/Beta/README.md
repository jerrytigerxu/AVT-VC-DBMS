# Beta (12/16-1/17)

- A) ~~Full implementation of AVT stock product pages on the production site (create exact replicas of the existing stock pages as private published pages) (12/16-18) (we as the marketing team decided that we need to purchase the "Team" price tier for Airtable (because of the expanded data limit and other capabilities~~
- ~~B) POC for price list generation workflow (12/19-23) | await the purchase of the "Team" tier of Airtable before finishing every single stock page~~
- ~~C) Address "critical error" that appears on Wordpress (find out how to replicate it, then figure out the source)~~
  - ~~Signing out of Wordpress or out of Airtable doesn't directly cause an issue -> it might be a time matter (also test between drafts and published pages) -> for drafts the shortcode could be executed many times in the background because of autosaves and revision history while for published pages the shortcode only runs once~~
- ~~D) Full implementation of basic Airtable setup & price list generation workflow (12/24-31)~~
- E) AVT production site overhaul (1/6-1/17)
  - ~~Double-check the AVT stock product tables and figure out the three categories that need further discussion (scWafers, oapMirrors, microscopeObjectives)~~
    - ~~Regarding Microscope Objectives, I didn't create tables for the YX series (there's simply too much) -> we need to clarify what is going on with the YX series (ask the production team to consolidate into fewer tables if they are still making them at all)~~
  - ~~Push code changes to production branch~~
  - ~~Confirm that you can have multiple bases~~
  - ~~Create the microscope objectives YX tables |and scWafers and oapMirrors (based on the changes in table format we discussed) (1/8)~~
  - "Replace" all of the old HTML tables with the corresponding Airtable tables (1/9-10, 13-17)
    - **Pages to create:**
      - Finished: ~~aspheric lenses,~~ ~~bandpass filters,~~ ~~IR lenses,~~ ~~UV Bandpass Filters,~~ ~~Germanium Windows,~~ ~~Sapphire Windows,~~ ~~Germanium Aspheric Lenses,~~ ~~SC Wafers,~~ ~~Narrow Bandpass Filters~~, ~~F-Theta Lenses~~, ~~FFL Lenses, Zoom Lenses, OAP Mirrors,~~ ~~Fisheye Lenses, Telecentric Lenses~~
      - ~~WIP (address data issue): Fisheye Lenses, Telecentric Lenses~~
      - To Do: Microscope Objectives (main), Microscope Objectives (YX), Beam Expanders (create both tables properly)
    - New procedure: take the older stock product pages and make them private (and change the titles to include "backup") -> these pages would then serve as backup pages in case something goes wrong with the Airtable connection | then just clone the older stock pages (initially label them as "New") and replace the HTML tables with the Airtable shortcode
