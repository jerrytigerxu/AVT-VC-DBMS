## Troubleshooting process (Data issue with fisheyeLenses and telecentricLenses)

**Problem:** Some records were randomly missing when pulling data from these Airtable tables into WordPress, and the sorting seemed inconsistent. This issue only occurred with specific tables and appeared to be related to the number of records in those tables.

### Troubleshooting Steps:
- Initial Checks: Ruled out common causes like hidden records, formula errors, and data type mismatches.
- Code Inspection: Examined the PHP code for any logic that might skip records, particularly those without a part number. No issues were found.
- Airtable Recreation: Attempted to recreate the tables in Airtable, but the problem persisted.
- API Request Focus: Narrowed down the culprit to the API request itself, as the JSON response also lacked some records.
- Data Volume Test: Discovered that reducing the number of records in the table resolved the issue, suggesting a limitation in the API request related to data volume.

### Solution:
- To avoid exceeding the API's data limits and the need for complex pagination code, we'll ensure that our Airtable tables never exceed 100 records.
- If a table grows beyond this limit, we'll split it into smaller tables or optimize the data structure to reduce the number of records.

### Going Forward:
- Regularly monitor the number of records in Airtable tables to keep them under the 100-record threshold.
- Consider implementing a check in the code to enforce this limit and provide an error message if it's exceeded.
- If necessary, split large tables or optimize the data structure to reduce the record count.
