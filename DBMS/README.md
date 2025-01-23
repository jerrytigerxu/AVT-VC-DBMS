# DBMS Overview
- **Impressive Resume Points**
  - Led \[Project Name] initiative, resulting in a \[metric]% reduction in product update cycle time and a \[metric]% decrease in data entry errors.
  - Spearheaded requirements analysis, gathering input from various stakeholders across production and marketing teams to define project scope and success criteria.
  - Streamlined data communication by implementing a centralized \[system name] database, eliminating manual handoffs and enabling real-time collaboration between departments.
  - Oversaw \[system name] implementation, ensuring seamless integration with WordPress and Elementor for automated product updates on the company website.
- **New Workflow**
  - Production team makes adjustments to product + price info and edits the Airtable bases directly
  - The marketing team will approve of the changes and then trigger the API calls to directly update the corresponding pages on the AVT site
  - Any changes that need to be made can be reverted within the 2-week timeframe
- Birds-eye view of the full system
  - Data management - product/price data lives in Airtable and marketing team uses the Airtable interface to manage this data (CRUD operations)
  - Website integration - PHP shortcode to fetch and display the data from Airtable in HTML tables on Wordpress web page
  - User experience - visitors to the product pages will see: product information displayed in an HTML table and a link to download the price list PDF at the bottom of the page
  - VERY IMPORTANT: Do not have commas between the attributes! You only need spaces in between! 
 
---



## ~~ReD~~
- [Proposal Document](https://docs.google.com/presentation/d/1YWCBuZBBXLy2H1MHFpzuVV7Zx-hF5jjJ/edit#slide=id.p2)


## ~~TDD~~ 
- ~~[**POC stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/POC) (12/2-10) - Create a simple POC test with Airtable and establish connection with production team~~
- ~~[**Alpha stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/Alpha) (12/9-13) - Full implementation of the DBMS system on the experimental branch (communication and tech stack) + gathering of feedback and consideration of enhancements~~
  - ~~The marketing team will be the hub of the product/price information (Airtable) and the production team should only highlight the changes of CRUD~~
- ~~[**Beta stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/Beta) - Full implementation of the DBMS system on the production site (deadline: 1/17/25)~~


## Streamlining (PAC) (work on the three tasks concurrently) (1/20/25 - 1/31/25)
- A) Completion of implementation
  - ~~(follow up on this again on 1/22/25)~~ ~~A1 - Ask the marketing team to clean up (mainly double-check) the data for Airtable~~
  - A2 - Make the "new" stock pages the public stock pages and take the older stock pages to make them private (Make the "new" stock pages the public stock pages | take the older stock product pages and make them private (and change the titles to include "backup") -> these pages would then serve as backup pages in case something goes wrong with the Airtable connection)
    - Important element of the procedure -> we have to put the shortcode onto the original pages (the clones become the backups)
  - A3 - Test the Airtable connection and ensure the data integrity
- B) (discontinue this - if we need to implement this later (if somehow this is necessary and has ROI), it will be a separate project) ~~Figure out the best solution for price list generation~~ 
  - ~~B1 - Await decision regarding whether or not the marketing team wants to keep the price lists~~
  - ~~B2 - If the marketing team wants to keep the price lists, investigate no-code design solutions (WordPress plugin or third-party platform) that can generate PDFs | If the marketing team decides to abandon price lists, focus on optimizing the Airtable connection for data display on the website.~~
  - ~~B3 - Document the decision regarding price lists and the chosen solution for future reference.~~
- C) [Create training materials](https://docs.google.com/document/d/1V4a86AQMCxfW-WlUkQnFpobg8zB_R_LypZsDvJaKYII/edit?tab=t.0)
  - ~~C1 - Draft/outline the training materials document, covering the new workflow and the use of Airtable for price list updates (Explain all of the attributes that the shortcode needs| One important point for documentation -> make sure the table names have no spaces! (Ex: "Aspheric Lenses" should be "asphericLenses"))~~
  - ~~C2 - Fill in the details of the training document~~
  - C3 - (after compiling questions and "guidance requests" from the team) Record a video tutorial explaining the new workflow and demonstrating how to use Airtable for price list updates.
  - C4 - Distribute the training materials and provide support during the transition | update the existing training materials document (https://docs.google.com/document/d/1GnsRCRwW9YfqyiwXnfDC-bqT414wsFJHUhj-LAKaWUo/edit?tab=t.0#heading=h.vb65bwinjcr0) with the new workflow and Airtable instructions.
 
