/// <reference types="cypress" />

// Welcome to Cypress!
//
// This spec file contains a variety of sample tests
// for a todo list app that are designed to demonstrate
// the power of writing tests in Cypress.
//
// To learn more about how Cypress works and
// what makes it such an awesome testing tool,
// please read our getting started guide:
// https://on.cypress.io/introduction-to-cypress

describe('Website e2e tests', () => {
  it('check h1', () => {
    cy.visit( Cypress.env('host') )
    cy.get('h1').first().should('have.text', 'See what is happening in the WordPress space')
  });
})
