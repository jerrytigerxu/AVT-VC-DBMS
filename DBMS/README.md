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


## TDD 
- ~~[**POC stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/POC) (12/2-10) - Create a simple POC test with Airtable and establish connection with production team~~
- ~~[**Alpha stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/Alpha) (12/9-13) - Full implementation of the DBMS system on the experimental branch (communication and tech stack) + gathering of feedback and consideration of enhancements~~
  - ~~The marketing team will be the hub of the product/price information (Airtable) and the production team should only highlight the changes of CRUD~~
- [**Beta stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/Beta) - Full implementation of the DBMS system on the production site (deadline: 1/10/25)


## Streamlining (PAC) (1/13/25 - 1/31/25)
- Figure out the best solution (balancing efficiency with sustainability) for the "secondary functionality" of price list generation
  - Await decision regarding whether or not the marketing team wants to keep the price lists
  - Instead of having automated PDF generation for the price list, we can have an extra manual step that makes it easier for direct customization especially for those who are not tech savvy 
  - We will still take advantage of the Air table API connection for displaying the data on the website, but for generating the PDFs we can have a no code design solution (either a WordPress plugin or a third party platform) -> we can have the HTML for the data be ready for download so that the HTML can be imported into the design tool 
  - The end result is that we'll never have to worry about CRUD operations and would only need to focus on the design and display information
  - Cons: there are still manual steps | Pros: minimizes the amount of coding necessary and maximizes design and customization agency
- Create a training materials document (plus video recordings of your training the marketing team) to maximize the ease of transition into the new workflow (update the price list update procedure based on how Airtable works - https://docs.google.com/document/d/1GnsRCRwW9YfqyiwXnfDC-bqT414wsFJHUhj-LAKaWUo/edit?tab=t.0#heading=h.vb65bwinjcr0)
  - Explain all of the attributes that the shortcode needs
  - One important point for documentation -> make sure the table names have no spaces! (Ex: "Aspheric Lenses" should be "asphericLenses")
