import axios from "axios";

const baseUrl = "http://localhost:8000/";

const doGetRequest = async (entity) => {
  const options = {
    method: "GET",
    url: baseUrl + entity.toLowerCase(),
  };
  const response = await sendRequest(options);

  return response;
};

const doPostRequest = async (entity, data) => {
  const options = {
    method: "POST ",
    url: baseUrl + entity.toLowerCase(),
    data: data,
    headers: {
      Accept: "application/json",
      "Content-Type": "multipart/form-data",
    },
  };
  const response = await sendRequest(options);

  return response;
};

const sendRequest = async (options) => {
  try {
    const response = await axios.request(options);

    return response.data;
  } catch (error) {
    console.error(error);
  }
};

export { doGetRequest, doPostRequest };
