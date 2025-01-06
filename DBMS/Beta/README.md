# Beta (12/16-1/10)

- A) ~~Full implementation of AVT stock product pages on the production site (create exact replicas of the existing stock pages as private published pages) (12/16-18) (we as the marketing team decided that we need to purchase the "Team" price tier for Airtable (because of the expanded data limit and other capabilities~~
- ~~B) POC for price list generation workflow (12/19-23) | await the purchase of the "Team" tier of Airtable before finishing every single stock page~~
- ~~C) Address "critical error" that appears on Wordpress (find out how to replicate it, then figure out the source)~~
  - ~~Signing out of Wordpress or out of Airtable doesn't directly cause an issue -> it might be a time matter (also test between drafts and published pages) -> for drafts the shortcode could be executed many times in the background because of autosaves and revision history while for published pages the shortcode only runs once~~
- ~~D) Full implementation of basic Airtable setup & price list generation workflow (12/24-31)~~
- E) AVT production site overhaul (1/6-1/10)
  - Double-check the AVT stock product tables and figure out the three categories that need further discussion (scWafers, oapMirrors, microscopeObjectives)
    - Regarding Microscope Objectives, I only created tables for the DL series -> we need to clarify what is going on with the YX series (ask the production team to consolidate into fewer tables if they are still making them at all)
  - ~~Push code changes to production branch~~
  - ~~Confirm that you can have multiple bases~~
  - "Replace" all of the old HTML tables with the corresponding Airtable tables
